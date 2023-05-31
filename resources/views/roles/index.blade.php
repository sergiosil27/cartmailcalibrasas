@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="float-right">
    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
      {{ __('Nuevo rol') }}
    </a>
  </div>
    <h1>Listar de roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}} </td>
                            <td>{{$role->name}} </td>
                            <td width="10px">
                                <a class="btn btn-sm btn-primary" href="{{route('roles.edit',$role)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form  action="{{route('roles.destroy',$role)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop