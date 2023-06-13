@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Editing Post</h3>
        </div>

        <form action="{{ route('posts.update',['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                       value="{{ $post->name }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Text</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1"
                          rows="3">{{ $post->text }}</textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">
                <span>Сохранить изменения</span>
            </button>
        </form>
    </div>

@endsection
