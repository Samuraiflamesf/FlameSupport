@extends('admin.layouts.app')
@section('title', 'Forum')
@section('content')

    <div class="hero flex justify-center h-full">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">
                    Olá, tudo bem?
                </h1>
                <p class="py-6">
                    FlameSupport é um sistema online baseado em Laravel 10 que oferece suporte eficiente por meio de
                    tickets, simplificando a comunicação entre clientes e equipes de suporte em um ambiente intuitivo e
                    organizado.
                </p>
                <a href="{{route('supports.index')}}" class="btn btn-primary">
                   Vamos lá
                </a>
            </div>
        </div>
    </div>

@endsection
