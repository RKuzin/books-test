@extends('layouts.site')

@section('title') authors list @endsection

@section('content')
    <div class="content page__content">
        <ul class="authors__list">
            @foreach($authors as $author)
                <li class="author authors__item">
                    <h3 class="author__name">{!! $author['fullname'] !!}</h3>
                    <p class="author__books">Книги:</p>
                    <ul class="author__books-list">
                        @foreach($author['books'] as $book)
                            <li class="author__books-item">
                                {!!$book->title." (".$book->release_date.")"!!}
                            </li>
                        @endforeach
                    </ul>

                </li>
            @endforeach
        </ul>
    </div>
@endsection