@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Create new Post</h3>
        </div>

        <form action="{{ route('tags.update',['tag' => $tag->id]) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                       value="{{ $tag->name }}">
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">
                <span>Сохранить изменения</span>
            </button>
        </form>
    </div>

@endsection
