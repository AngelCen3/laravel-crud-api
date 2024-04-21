<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
class studentController extends Controller
{
    public function index(){
        $students = Student::all();
        /*if ($students->isEmpty()) {
            return response()->json(['message' => 'No students were found'], 404);
        }*/
        $data = [
            'students' => $students,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique',
        'phone' => 'required',
        'language' => 'required'
    ]);
    if ($validator->fails()){
        $data = [
            'message' => 'Error en la validacion de datos',
            'error' => $validator -> errors(),
            'status' => 400
        ];
    }
}
}


