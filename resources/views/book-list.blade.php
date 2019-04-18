@extends('layouts.site')

@section('title') Books list @endsection

@section('content')
    <div class="content page__content">
        <ul class="books__list">
        @foreach($books as $book)
            <li class="book books__item">
                <h3 class="book__title">{!! $book['title'] !!}</h3>
                <p class="book__description">{!! $book['description'] !!}</p>
                <p class="book__release-date">Год издания: {!! $book['release-date'] !!}</p>
                <p class="book__authors">Автор: {!! $book['authors'] !!}</p>
            </li>
        @endforeach
        </ul>
    </div>
@endsection