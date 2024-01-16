<?php


?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informe abaixo as informações do cliente:') }}
        </h2>
        <a href="{{route('clientes')}}">Listagem de clientes</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Cadastro de Cliente") }}
                    

                    {!! Form::open() !!}


                    {!! Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus']) !!}

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>