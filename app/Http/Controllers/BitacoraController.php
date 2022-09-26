<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\User;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index(){
        $bitacoras = $this->read();
        return view('bitacora.index', compact('bitacoras'));
    }
    public function read(){
        return Bitacora::all();
    }

    public function register(){
        $usuarios = User::all();
        return view('bitacora.register', compact('usuarios'));
    }


    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Bitacora::insert($data);
        return redirect(route('bitacoraIndex'));
    }

    public function edit($id){
        $usuarios = User::all();
        $bitacora = Bitacora::find($id);
        return view('bitacora.edit', compact('bitacora','usuarios'));
    }


    public function update($id, Request $request){
        $data = $this->validateForm($request);
        Bitacora::find($id)->update($data);
        return redirect(route('bitacoraIndex'));
    }

    public function show($id){
        $bitacora=Bitacora::find($id);
        return view('bitacora.show', compact('bitacora'));
    }

    public function delete($id){
        Bitacora::find($id)->delete();
        return redirect(route('bitacoraIndex'));
    }


    public function validateForm(Request $request){
        $validatedData = $request->validate([
            'descripcion'=>'required',
            'fecha' => 'required',
            'user_id' => 'required'
        ]);
        return $validatedData;
    }
}
