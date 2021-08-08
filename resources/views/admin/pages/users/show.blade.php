@extends('adminlte::page')

@section('title', 'Detalhes do Usuário')

@section('content_header')
<h1>Detalhes do Usuário </h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        <ul>
            <li>
                <strong>Nome:</strong>{{ $user->name }}
            </li>
            <li>
                <strong>Usuário:</strong>{{ $user->username }}
            </li>
            <li>
                <strong>CEP:</strong>{{ $user->zipcode }}
            </li>
            <li>
                <strong>E-mail:</strong>{{ $user->email }}
            </li>
        </ul>
    </div>
</div>
@stop