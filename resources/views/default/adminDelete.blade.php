@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Запись удалена</h2>
                <a  href="{{ route('admin')}}">Вернуться назад</a>
            </div>
        </div>
    </div>
@endsection
<style>
    body{background:  url("https://vk.com/uploads/images/poster/preview_7_2x.png") 50% center / cover no-repeat;}
</style>