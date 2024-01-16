<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
        <a class="text-primary" href="{{route('novoCliente')}}">Novo cliente</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Listagem de clientes") }}
                    <br>

                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success" role="alert"> {{ Session::get('mensagem_sucesso') }} </div>
                    @endif

                    <table class="table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->numero }}</td>
                                <td>
                                    <a href="/clientes/{{ $cliente->id}}/editar " class="btn btn-secondary">Editar</a>

                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/clientes/'.$cliente->id , 'style' => 'display:inline;']) !!}
                                    <button type="submit" href="" class="btn btn-secondary bg-secondary">Excluir</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>