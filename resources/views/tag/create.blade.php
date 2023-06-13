@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="d-flex justify-content-between" style="width: 100%">
            <h3>Create new Tag</h3>
        </div>

        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            @error('name')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">
                <span>Создать</span>
            </button>
        </form>
    </div>

@endsection
