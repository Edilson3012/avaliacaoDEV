@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')
    <h1>Editar Usuário </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.users._partials.form')

            </form>
        </div>
    </div>
@stop