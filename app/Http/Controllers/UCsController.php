<?php

namespace App\Http\Controllers;

use App\Models\UC;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;

class UCsController extends Controller

{
    public function index()
    {
        $ucs = Uc::all();
        return view('ucs.index',['ucs'=>$ucs]);
    }

    public function detail($id)
    {
        $uc = Uc::find($id);
        return view('ucs.detail',['uc'=>$uc]);
    }

    public function create()
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            return view('ucs.create',[]);
        }else{
            return redirect('/ucs');
        }
    }

    public function store(Request $request)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $uc=new Uc();
            $uc->codigo = $request->input('codigo');
            $uc->nome = $request->input('nome');
            $uc->creditos = $request->input('creditos');
            $uc->duracao = $request->input('duracao');
            $uc->teorica = $request->input('teorica');
            $uc->pratica = $request->input('pratica');
            $uc->ano = $request->input('ano');
            $uc->semestre = $request->input('semestre');
            $uc->save();
            return redirect('/ucs');
        }else{
            return redirect('/ucs');
        }


    }

    public function edit($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $uc = Uc::find($id);
            return view('ucs.edit',['uc'=>$uc]);
        }else{
            return redirect('/ucs');
        }
    }

    public function update(Request $request, $id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $uc = Uc::find($id);
            $uc->codigo = $request->input('codigo');
            $uc->nome = $request->input('nome');
            $uc->creditos = $request->input('creditos');
            $uc->duracao = $request->input('duracao');
            $uc->teorica = $request->input('teorica');
            $uc->pratica = $request->input('pratica');
            $uc->ano = $request->input('ano');
            $uc->semestre = $request->input('semestre');
            $uc->save();
            return redirect('/ucs');
        }else{
            return redirect('/ucs');
        }

    }

    public function destroy($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $uc = Uc::find($id);
            return view('ucs.destroy',['uc'=>$uc]);
        }else{
            return redirect('/ucs');
        }
    }

    public function deleteReg($id){

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $uc = Uc::find($id);
            $uc->delete();
            return redirect('/ucs');
        }else{
            return redirect('/ucs');
        }
    }
}
