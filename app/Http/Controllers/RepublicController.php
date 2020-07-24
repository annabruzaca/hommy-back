<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Republic;
use App\lessor;

class RepublicController extends Controller
{
    //
    public function createRepublic(Request $request){
        $republic = new Republic;
        $republic->name = $request->name;
        $republic->CEP = $request->CEP;
        $republic->how_many_bedrooms = $request->how_many_bedrooms;
        $republic->how_many_bathrooms = $request->how_many_bathrooms;
        $republic->kitchen = $request->kitchen;
        $republic->living_room = $request->living_room;
        $republic->laundry = $request->laundry;
        $republic->description = $request->description;
        $republic->save();
        return response()->json($republic);
    }
    public function showRepublic($id){
        $request = Republic::findOrFail($id);
        return response()->json($republic);
    }
    public function listRepublic(){
        $republic = Republic::all();
        return response()->json([$republic]);
    }
    public function updateRepublic(Request $request, $id){
        $republic = Republic::findOrFail($id);
        if($request->name){
            $this->name = $request->name;
        }
        if($request->CEP){
            $this->CEP = $request->CEP;
        }
        if($request->how_many_bedrooms){
            $this->how_many_bedrooms = $request->how_many_bedrooms;
        }
        if($request->how_many_bathrooms){
            $this->how_many_bathrooms = $request->how_many_bathrooms;
        }
        if($request->kitchen){
            $this->kitchen = $request->kitchen;
        }
        if($request->living_room){
            $this->living_room = $request->living_room;
        }
        if($request->laundry){
            $this->laundry = $request->laundry;
        }
        if($request->description){
            $this->description = $request->description;
        }
        $republic->save();
        return response()->json($republic);
    }
    public function deleteRepublic($id){
        Republic::destroy($id);
        return response()->json(['Produto deletado']);
    }
    public function addLessor($id, $republic_id){
        $lessor = Lessor::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $republic_id->lessor = $id;
        $republic_id->save();
        return response()->json($republic_id);
    }
    public function removeLessor($id, $republic_id){
        $lessor = lessor::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $republic_id->lessor = NULL;
        $republic_id->save();
        return response()->json($republic_id);
    }
}
