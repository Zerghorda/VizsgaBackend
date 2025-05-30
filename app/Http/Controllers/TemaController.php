<?php

namespace App\Http\Controllers;

use App\Models\tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
     public function index(){
        return tema::all();
    }

    public function show(string $id){
        return tema::find($id);
    }

    public function store(Request $request){
         $tema = new tema();
        $tema->fill($request->all());
        $tema ->save();
    }

     public function update(Request $request,String $id){
        $tema = tema::find($id);
        $tema->fill($request->all());
        $tema ->save();
    }

     public function destroy(string $id){
       tema::find($id)->delete();
    }
}
