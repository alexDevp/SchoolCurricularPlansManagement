<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanoCurricular;
use App\Models\Escola;
use App\Models\Regime;
use App\Models\Curso;
use App\Models\Uc;
use Illuminate\Support\Facades\DB;
use App\Models\ListaUc;
use Session;

class PlanosCurricularesController extends Controller
{

    public function index()
    {

         $planosCurriculares = DB::table('planos_curriculares')
            ->join('cursos', 'planos_curriculares.id_curso', '=','cursos.id')
            ->join('escolas', 'planos_curriculares.id_escola', '=','escolas.id')
            ->join('regimes', 'planos_curriculares.id_regime', '=','regimes.id')
            ->select('planos_curriculares.id', 'cursos.id as id_curso', 'escolas.id as id_escola', 'regimes.id as id_regime', 'cursos.curso as curso', 'escolas.escola as escola', 'regimes.regime as regime')
            ->get();

         $listasUcs = DB::table('listas_ucs')
           ->join('ucs', 'listas_ucs.id_uc', '=', 'ucs.id')
           ->select('id_plano_curricular', 'ucs.codigo' ,'ucs.nome as uc', 'ucs.ano as ano', 'ucs.semestre as semestre')
           ->orderBy('ucs.ano','asc')
           ->orderBy('ucs.semestre', 'asc')
           ->get()
           ->groupBy('id_plano_curricular');


        return view('planosCurriculares.index', ['planosCurriculares'=>$planosCurriculares, 'listasUcs'=>$listasUcs]);

    }

    public function detail($id)
    {
        $planoCurricular = DB::table('planos_curriculares')
            ->join('cursos', 'planos_curriculares.id_curso', '=','cursos.id')
            ->join('escolas', 'planos_curriculares.id_escola', '=','escolas.id')
            ->join('regimes', 'planos_curriculares.id_regime', '=','regimes.id')
            ->where('planos_curriculares.id',$id)
            ->select('planos_curriculares.id', 'cursos.id as id_curso', 'escolas.id as id_escola', 'regimes.id as id_regime', 'cursos.curso as curso', 'escolas.escola as escola', 'regimes.regime as regime')
            ->get();

        $listaUcs = DB::table('listas_ucs')
            ->join('ucs', 'listas_ucs.id_uc', '=', 'ucs.id')
            ->where('listas_ucs.id_plano_curricular',$id)
            ->select('id_plano_curricular', 'ucs.codigo' ,'ucs.nome as uc', 'ucs.ano as ano', 'ucs.semestre as semestre')
            ->orderBy('ucs.ano','asc')
            ->orderBy('ucs.semestre', 'asc')
            ->get();

        return view('planosCurriculares.detail', ['planoCurricular'=>$planoCurricular, 'listaUcs'=>$listaUcs]);
    }


    public function create()
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escolas = Escola::all();
            $regimes = Regime::all();
            $cursos =Curso::all();
            $ucs = Uc::all();

            return view('planosCurriculares.create', ['escolas'=>$escolas, 'regimes'=>$regimes, 'cursos'=>$cursos, 'ucs'=>$ucs]);
        }else{
            return redirect('/planosCurriculares/');
        }

    }

    public function store(Request $request)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $planoCurricular = new PlanoCurricular();
            $planoCurricular->id_curso = $request->input('curso');
            $planoCurricular->id_escola = $request->input('escola');
            $planoCurricular->id_regime = $request->input('regime');
            $planoCurricular->save();


            foreach ($request->input('ucs') as $uc){
                $ucL = new ListaUc();
                $ucL->id_uc = $uc;
                $ucL->id_plano_curricular = $planoCurricular->id;
                $ucL->save();
            }

            return redirect('/planosCurriculares/');

        }else{
            return redirect('/planosCurriculares/');
        }

    }

    public function edit($id)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escolas = Escola::all();
            $regimes = Regime::all();
            $cursos =Curso::all();
            $ucs = Uc::all();

            $planoCurricular = DB::table('planos_curriculares')
                ->join('cursos', 'planos_curriculares.id_curso', '=','cursos.id')
                ->join('escolas', 'planos_curriculares.id_escola', '=','escolas.id')
                ->join('regimes', 'planos_curriculares.id_regime', '=','regimes.id')
                ->where('planos_curriculares.id',$id)
                ->select('planos_curriculares.id', 'cursos.id as id_curso', 'escolas.id as id_escola', 'regimes.id as id_regime', 'cursos.curso as curso', 'escolas.escola as escola', 'regimes.regime as regime')
                ->get();

            $listaUcs = DB::table('listas_ucs')
                ->join('ucs', 'listas_ucs.id_uc', '=', 'ucs.id')
                ->where('listas_ucs.id_plano_curricular',$id)
                ->select('ucs.id as id')
                ->orderBy('ucs.ano','asc')
                ->orderBy('ucs.semestre', 'asc')
                ->get();

            return view('planosCurriculares.edit', ['escolas'=>$escolas, 'regimes'=>$regimes, 'cursos'=>$cursos, 'ucs'=>$ucs,'planoCurricular'=>$planoCurricular, 'listaUcs'=>$listaUcs]);

        }else{
            return redirect('/planosCurriculares/');
        }

    }

    public function update(Request $request, $id)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $planoCurricular = PlanoCurricular::find($id);
            $planoCurricular->id_curso = $request->input('curso');
            $planoCurricular->id_escola = $request->input('escola');
            $planoCurricular->id_regime = $request->input('regime');
            $planoCurricular->save();

            DB::table('listas_ucs')->where('id_plano_curricular', $id)->delete();

            foreach ($request->input('ucs') as $uc){
                $ucL = new ListaUc();
                $ucL->id_uc = $uc;
                $ucL->id_plano_curricular = $planoCurricular->id;
                $ucL->save();
            }

            return redirect('/planosCurriculares/');
        }else{
            return redirect('/planosCurriculares/');
        }

    }

    public function destroy($id)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $planoCurricular = DB::table('planos_curriculares')
                ->join('cursos', 'planos_curriculares.id_curso', '=','cursos.id')
                ->join('escolas', 'planos_curriculares.id_escola', '=','escolas.id')
                ->join('regimes', 'planos_curriculares.id_regime', '=','regimes.id')
                ->where('planos_curriculares.id',$id)
                ->select('planos_curriculares.id', 'cursos.id as id_curso', 'escolas.id as id_escola', 'regimes.id as id_regime', 'cursos.curso as curso', 'escolas.escola as escola', 'regimes.regime as regime')
                ->get();

            $listaUcs = DB::table('listas_ucs')
                ->join('ucs', 'listas_ucs.id_uc', '=', 'ucs.id')
                ->where('listas_ucs.id_plano_curricular',$id)
                ->select('id_plano_curricular', 'ucs.codigo' ,'ucs.nome as uc', 'ucs.ano as ano', 'ucs.semestre as semestre')
                ->orderBy('ucs.ano','asc')
                ->orderBy('ucs.semestre', 'asc')
                ->get();

            return view('planosCurriculares.destroy', ['planoCurricular'=>$planoCurricular, 'listaUcs'=>$listaUcs]);
        }else{
            return redirect('/planosCurriculares/');
        }



    }

    public function deleteReg($id){

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $planoCurricular = PlanoCurricular::find($id);
            $planoCurricular->delete();

            DB::table('listas_ucs')->where('id_plano_curricular', $id)->delete();

            return redirect('/planosCurriculares/');
        }else{
            return redirect('/planosCurriculares/');
        }

    }
}
