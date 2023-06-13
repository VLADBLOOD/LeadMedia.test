@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Tags</h3>
            <a class="btn btn-outline-primary" href="{{ route('tags.create') }}" role="button">Добавить</a>
        </div>

        <table class="table table-striped table-dark mt-2">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Administrate</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="{{ route('tags.edit', ['tag' => $tag->id]) }}">
                                @csrf
                                <button class="btn btn-outline-primary btn-sm mr-2" href="#" role="button">
                                    Редактировать
                                </button>
                            </form>
                            <form method="POST" action="{{ route('tags.destroy', ['tag' => $tag->id]) }}">
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
