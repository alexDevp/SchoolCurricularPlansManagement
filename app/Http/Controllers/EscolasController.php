<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;

class EscolasController extends Controller
{
    public function index()
    {
        $escolas = Escola::all();
        return view('escolas.index',['escolas'=>$escolas]);
    }

    public function detail($id)
    {
        $escola = Escola::find($id);
        return view('escolas.detail',['escola'=>$escola]);
    }

    public function create()
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            return view('escolas.create',[]);
        }else{
            return redirect('/escolas');
        }
    }

    public function store(Request $request)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escola=new Escola();
            $escola->escola = $request->input('escola');
            $escola->morada = $request->input('morada');
            $escola->save();
            return redirect('/escolas');
        }else{
            return redirect('/escolas');
        }
    }

    public function edit($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escola = Escola::find($id);
            return view('escolas.edit',['escola'=>$escola]);
        }else{
            return redirect('/escolas');
        }
    }

    public function update(Request $request, $id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escola = Escola::find($id);
            $escola->escola = $request->input('escola');
            $escola->morada = $request->input('morada');
            $escola->save();
            return redirect('/escolas');
        }else{
            return redirect('/escolas');
        }
    }

    public function destroy($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escola = Escola::find($id);
            return view('escolas.destroy',['escola'=>$escola]);
        }else{
            return redirect('/escolas');
        }
    }

    public function deleteReg($id)
    {
        $userType=Session::get('user')['admin'];

        if($userType == 1){
            $escola = Escola::find($id);
            $escola->delete();
            return redirect('/escolas');
        }else{
            return redirect('/escolas');
        }
    }
}
