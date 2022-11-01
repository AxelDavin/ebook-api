<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();

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
        $table = Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue,
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
        $table = Book::find($id);
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
        $table = Book::find($id);
        if($table){
            $table->title = $request->title ? $request->title :  $table->title;
            $table->description = $request->description ? $request->description :  $table->description;
            $table->author = $request->author ? $request->author :  $table->author;
            $table->publisher = $request->publisher ? $request->publisher :  $table->publisher;
            $table->date_of_issue = $request->pdate_of_issue ? $request->date_of_issue :  $table->date_of_issue;
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
        $table = Book::find($id);
        if($table){
            $table->delete();
            return ["message" => "Delete Success"];
        }else{
            return ["message" => "Data Not Found"];
        }
    }
}
