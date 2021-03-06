@extends('layouts.layout')

@section('titulo_pagina', 'Usuarios')

@section('content')
    <div>
        <div>
            <h1 class="pb-1">{{ $title }}</h1>
            <p>
                <a href=" class="btn primary">Nuevo usuario</a>
            </p>
        </div>
        <div>
            @if ($users->isNotEmpty())
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="" class="btn btn-link"><span class="oi oi-eye"></span></a>
                                <a href="" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                                <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                            </form-->
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay usuarios registrados.</p>
            @endif
        </div>
    </div>
@endsection