@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Успех:</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>Ошибка:</strong> {{ session('error') }}
    </div>
@endif

{{--@if($errors->any())--}}
{{--    @dd($errors->getMessagesBag())--}}
{{--    @foreach($errors as $a) @endforeach--}}
{{--    <div class="alert alert-danger alert-dismissible" role="alert">--}}
{{--    </div>--}}
{{--@endif--}}
