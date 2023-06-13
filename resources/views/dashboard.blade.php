@extends('layouts.app')
@section('content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Home page</h1>
        <ul class="d-inline-flex list-unstyled">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tags.index') }}">Tag</a>
            </li>
        </ul>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

@endsection
