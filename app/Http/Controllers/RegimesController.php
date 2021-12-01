<?php

namespace App\Http\Controllers;

use App\Models\Regime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;

class RegimesController extends Controller
{
    public function index()
    {
        $regimes = Regime::all();
        return view('regimes.index',['regimes'=>$regimes]);
    }

    public function detail($id)
    {
        $regime = Regime::find($id);
        return view('regimes.detail',['regime'=>$regime]);
    }

    public function create()
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            return view('regimes.create',[]);
        }else{
            return redirect('/regimes');
        }


    }

    public function store(Request $request)
    {

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $regime=new Regime();
            $regime->regime = $request->input('regime');
            $regime->sigla = $request->input('sigla');
            $regime->descricao = $request->input('descricao');
            $regime->save();
            return redirect('/regimes');
        }else{
            return redirect('/regimes');
        }

    }

    public function edit($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $regime = Regime::find($id);
            return view('regimes.edit',['regime'=>$regime]);
        }else{
            return redirect('/regimes');
        }


    }

    public function update(Request $request, $id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $regime = Regime::find($id);
            $regime->regime = $request->input('regime');
            $regime->sigla = $request->input('sigla');
            $regime->descricao = $request->input('descricao');
            $regime->save();
            return redirect('/regimes');
        }else{
            return redirect('/regimes');
        }


    }

    public function destroy($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $regime = Regime::find($id);
            return view('regimes.destroy',['regime'=>$regime]);
        }else{
            return redirect('/regimes');
        }
    }

    public function deleteReg($id){

        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $regime = Regime::find($id);
            $regime->delete();
            return redirect('/regimes');
        }else{
            return redirect('/regimes');
        }

    }
}
