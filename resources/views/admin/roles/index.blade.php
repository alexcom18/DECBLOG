@extends('adminlte::page')

@section('title', 'DEC')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.roles.create')}}">Nuevo role</a>
    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>

                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                
                                @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{route('admin.roles.destroy', $role)}}" method="POST" >
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                                
                            </td>
                        </tr>                        
                    @endforeach
                    
                </tbody>

            </table>
        </div>
    </div>
@stop
