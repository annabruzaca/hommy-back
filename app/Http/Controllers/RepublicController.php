<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Republic;
use App\User;

class RepublicController extends Controller
{
    //
    public function createRepublic(Request $request){
        $republic = new Republic;
        $republic->name = $request->name;
        $republic->CEP = $request->CEP;
        $republic->bedrooms = $request->bedrooms;
        $republic->bathrooms = $request->bathrooms;
        $republic->kitchen = $request->kitchen;
        $republic->living_room = $request->living_room;
        $republic->laundry = $request->laundry;
        $republic->furniture = $request->furniture;
        $republic->bedrooms_with_the_same_size = $request->bedrooms_with_the_same_size;
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
        if($request->bedrooms){
            $this->bedrooms = $request->bedrooms;
        }
        if($request->bathrooms){
            $this->bathrooms = $request->bathrooms;
        }
        if($request->kitchen){
            $this->kitchen = $request->kitchen;
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
        if($request->furniture){
            $this->furniture = $request->furniture;
        }
        if($request->bedrooms_with_the_same_size){
            $this->bedrooms_with_the_same_size = $bedrooms_with_the_same_size;
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
    public function addUser($id, $republic_id){
        $user = User::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $republic_id->user = $id;
        $republic_id->save();
        return response()->json($republic_id);
    }
    public function removeUser($id, $republic_id){
        $user = User::findOrFail($id);
        $republic = Republic::findOrFail($republic_id);
        $republic_id->user = NULL;
        $republic_id->save();
        return response()->json($republic_id);
    }
}
