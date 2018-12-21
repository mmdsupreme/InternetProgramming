@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div  class="col-md-8" style="background:  #1F2229; color: white; border-radius: 21px">
                  <h3 style="text-align: center; margin-top: 15px">Редактирование</h3>
                    <form action="{{route('adminUpdate')}}" method="post" style="margin-top: 50px;" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$data[0]->id}}">
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input style="margin-left: 80px; width: 600px; margin-bottom: 30px" type="text" placeholder="Email" name="email"
                               value="{{old('email', $data[0]->email)}}"><br>
                        <textarea style="margin-left: 80px; width: 600px" name="description" id="" cols="30" rows="10" placeholder="Описание">{{old('description', $data[0]->description)}}</textarea><br>
                        <input  style="margin-left: 300px; margin-bottom: 15px" class="btn btn-primary" type="submit" value="Редактировать"><br>
                    </form>
                    <div>{{session('msg')}}</div>

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

            </div>
        </div>
    </div>
@endsection
<style>
    body{background:  url("https://vk.com/uploads/images/poster/preview_7_2x.png") 50% center / cover no-repeat;}
</style>