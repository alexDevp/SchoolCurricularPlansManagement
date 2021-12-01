<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;

class CursosController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index',['cursos'=>$cursos]);
    }

    public function detail($id)
    {
        $curso = Curso::find($id);
        return view('cursos.detail',['curso'=>$curso]);
    }

    public function create()
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            return view('cursos.create',[]);
        }else{
            return redirect('/cursos');
        }
    }

    public function store(Request $request)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $curso=new Curso();
            $curso->curso = $request->input('curso');
            $curso->nivel = $request->input('nivel');
            $curso->save();
            return redirect('/cursos');
        }else{
            return redirect('/cursos');
        }
    }

    public function edit($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $curso = Curso::find($id);
            return view('cursos.edit',['curso'=>$curso]);
        }else{
            return redirect('/cursos');
        }
    }

    public function update(Request $request, $id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $curso = Curso::find($id);
            $curso->curso = $request->input('curso');
            $curso->nivel = $request->input('nivel');
            $curso->save();
            return redirect('/cursos');
        }else{
            return redirect('/cursos');
        }
    }

    public function destroy($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $curso = Curso::find($id);
            return view('cursos.destroy',['curso'=>$curso]);
        }else{
            return redirect('/cursos');
        }
    }

    public function deleteReg($id){

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $curso = Curso::find($id);
            $curso->delete();
            return redirect('/cursos');
        }else{
            return redirect('/cursos');
        }
    }
}
