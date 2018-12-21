@extends('layouts.app')

@section('content')

    <div class="starter-template">
        <table border="1" class="table table-hover">
            <tr style="background:  #1F2229; color: white">
                <td>#</td>
                <td>Описание</td>
                <td>Email</td>
                <td>Путь к файлу</td>
                <td>_</td>
                <td>_</td>
            </tr>


            @foreach($data as $value)
                <tr>
                    <td class="font-italic">{{$value->id}}</td>
                    <td class="font-italic">{{$value->description}}</td>
                    <td class="font-italic">{{$value->email}}</td>
                    <td class="font-italic">{{$value->name_file}}</td>
                    <td><a href="{{route('adminEdit',$value->id)}}"><button class="btn btn-primary">Редактировать</button></a></td>

                    <td><a href="{{route('adminDelete',$value->id)}}"><button  class="btn btn-danger">Удалить</button></a></td>
                </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>

@endsection
<style>
    body{background:  url("https://vk.com/uploads/images/poster/preview_7_2x.png") 50% center / cover no-repeat;}
</style>
