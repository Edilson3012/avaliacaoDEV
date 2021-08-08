@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários <a href="{{ route('user.create') }}" class="btn btn-success">Add</a> </h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{route('user.search')}}" class="form form-inline" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Nome" value="{{ $filters['name'] ?? '' }}" class="form-control">&nbsp;
                <input type="text" name="username" placeholder="Usuário" value="{{ $filters['username'] ?? '' }}" class="form-control">&nbsp;
                <input type="text" name="email" placeholder="E-mail" value="{{ $filters['email'] ?? '' }}" class="form-control">&nbsp;
            </div>
            <button type="submit" class="btn btn-info">Filtrar</button>

        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th style="width: 150px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->username}}
                    </td>
                    <td style="width: 10px;">
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $users->appends($filters)->links() !!}
        @else
            {!! $users->links() !!}
        @endif
    </div>
</div>
@stop