@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <input type="search" class="form-control" placeholder="Ingrese el nombre o correo o usuario">
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}} </td>
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}} </td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{route('users.edit',$user)}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {!!$user->links!!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop