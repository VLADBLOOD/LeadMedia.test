@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Posts</h3>
            <a class="btn btn-outline-primary" href="{{ route('posts.create') }}" role="button">Добавить</a>
        </div>

        <table class="table table-striped table-dark mt-2">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Text</th>
                <th scope="col">Image</th>
                <th scope="col">Tags</th>
                <th scope="col">Administrate</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->text }}</td>
                    <td><img height="30px" src="{{ asset($post->img) }}"></td>
                    <td>
                        @foreach($post->tags as $tag)
                            <span>{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="{{ route('posts.show', ['post' => $post->id]) }}">
                                @csrf
                                <button class="btn btn-outline-info btn-sm mr-2" href="#" role="button">
                                    Просмотр
                                </button>
                            </form>
                            <form method="GET" action="{{ route('posts.edit', ['post' => $post->id]) }}">
                                @csrf
                                <button class="btn btn-outline-primary btn-sm mr-2" href="#" role="button">
                                    Редактировать
                                </button>
                            </form>
                            <form method="POST" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button class="btn btn-outline-danger btn-sm" href="#" role="button">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
