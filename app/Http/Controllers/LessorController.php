<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lessor;

class LessorController extends Controller
{
    //
    public function createLessor(Request $request){
        $lessor = new Lessor;
        $lessor->name = $request->name;
        $lessor->cellphone = $request->cellphone;
        $lessor->birthday = $request->birthday;
        $lessor->email = $request->email;
        $lessor->password = $request->password;
        $lessor->confirm_password = $request->confirm_password;
        $lessor->save();
        return response()->json($lessor);
    }
    public function showLessor($id){
        $lessor = Lessor::findOrFail($id);
        return response()->json($republic);
    }
    public function updateLessor(Request $request, $id){
        $republic = Republic::findOrFail($id);
        if($request->name){
            $this->name = $request->name;
        }
        if($request->cellphone){
            $this->cellphone = $request->cellphone;
        }
        if($request->birthday){
            $this->birthday = $request->birthday;
        }
        if($request->email){
            $this->email = $request->email;
        }
        if($request->password){
            $this->password = $request->password;
        }
        if($request->confirm_password){
            $this->confirm_password = $request->confirm_password;
        $this->save();
        return response()->json($lessor)
    }
    public function deleteLessor($id){
        Republic::destroy($id);
        return response()->json(['Usuário Deletado']);
    }
}
