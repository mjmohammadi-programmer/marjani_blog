@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <ul>
                @foreach($categories as $category)
                    <li style="margin-top: 10px;">
                        {{$category->name}}
                        <a href="/category/edit/{{$category->id}}" style="margin-left: 10px;">
                            <button class="btn-primary" style="border-radius: 5px;">edit</button>
                        </a>
                        <form action="/category/delete/{{$category->id}}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger" style="border-radius: 5px;">delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
