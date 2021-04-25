<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Response\ResponseJson;

class UserController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/index');
    }
    public function create(Request $request){
        $input=$request->all();
        Note::create(input);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$input]);
    }
}