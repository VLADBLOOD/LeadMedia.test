@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Create new Post</h3>
        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>

            @error('text')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Text</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            @error('img')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input name="img" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Select image">
            </div>

            @error('tags')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tags</label>
                <select name="tags[]" class="form-control" id="exampleFormControlSelect1" multiple required>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">
                <span>Создать</span>
            </button>
        </form>
    </div>

@endsection
