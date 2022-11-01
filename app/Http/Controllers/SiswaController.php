<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();

        return $data;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Siswa::create([
            "name" => $request->name,
            "gender" => $request->gender,
            "age" => $request->age,
        ]);

        return $table;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Siswa::find($id);
        if($table){
            return $table;
        } 
        else{
            return ["message" => "Data Not Found"];
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Siswa::find($id);
        if($table){
            $table->name = $request->name ? $request->name :  $table->name;
            $table->gender = $request->gender ? $request->gender :  $table->gender;
            $table->age = $request->age ? $request->age :  $table->age;
            $table->save();

            return $table;
        }
        else{
            return ["message" => "Data not found"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
