<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    public function index(){
        return szavak::all();
    }

    public function show(string $id){
        return szavak::find($id);
    }

    public function store(Request $request){
        $szavak = new szavak();
        $szavak->fill($request->all());
        $szavak ->save();
    }

     public function update(Request $request,String $id){
        $szavak = szavak::find($id);
        $szavak->fill($request->all());
        $szavak ->save();
    }

     public function destroy(string $id){
       szavak::find($id)->delete();
    }

}
