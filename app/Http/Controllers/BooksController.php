<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $books = Book::orderBy('title', 'ASC')->get();
        $i = 0;
        $data = array();
        foreach ($books as $book) {
            $data[$i]['title'] = $book->title;
            $data[$i]['description'] = $book->description;
            $data[$i]['realise-date'] = $book->realise_date;
            $authors = $book->authors()->orderBy('surname')->get();
            // извлекаем все значения коллекции по указанным ключам и соединяем имя с фамилией:
            $authors = $authors->pluck('name', 'surname')->map(function ($item, $key) {
                return $item . " " . $key;
            });
            $authors = $authors->flatten()->implode(', ');
            $data[$i]['authors'] = $authors;
            $i++;
        }
        return view('book-list')->with('books', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
