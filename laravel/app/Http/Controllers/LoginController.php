<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function escola(Request $request){
        $escola = DB::table('schools')->where('email','=',$request->email)->first();

        if($escola){
            if(Hash::check($request->password, $escola->senha)){
                return redirect('/painel');
            }
        }else{
            return redirect()->back()->with(['error' => 'Email não encontrado']);
        }
    }

    public function responsavel(Request $request){
        $responsavel = DB::table('users')->where('cpf','=',$request->cpf)->first();

        if($responsavel) {
            if (Hash::check($request->password, $responsavel->senha)) {
                return redirect('/perfil');
            }
        }else{
            return redirect()->back()->with(['error' => 'CPF não encontrado']);
        }
    }
}
