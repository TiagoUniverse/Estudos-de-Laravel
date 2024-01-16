 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Informe abaixo as informações do cliente:') }}
         </h2>
         <a class="text-primary" href="{{route('clientes')}}">Listagem de clientes</a>
     </x-slot>

     <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">


                     {{ __("Cadastro de Cliente") }}

                     @if(Session::has('mensagem_sucesso'))
                     <div class="alert alert-success" role="alert"> {{ Session::get('mensagem_sucesso') }} </div>
                     @endif


                     @if(Request::is('*/editar'))
                        {!! Form::model($cliente, ['method' => 'PATCH' , 'url' => 'clientes/'.$cliente->id]) !!}
                     @else
                     {!! Form::open(['url' => 'clientes/salvar']) !!}
                     @endif

                     {!! Form::label('ome', 'Nome') !!}
                     {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus' , 'placeholder' => 'Nome']) !!}

                     {!! Form::label('endereco', 'Endereço') !!}
                     {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '' , 'placeholder' => 'Endereço']) !!}

                     {!! Form::label('numero', 'Número') !!}
                     {!! Form::input('text', 'numero', null, ['class' => 'form-control', '' , 'placeholder' => 'Número']) !!}

                     {!! Form::submit('Salvar', ['class' => 'btn btn-primary bg-primary']) !!}

                     {!! Form::close() !!}


                 </div>
             </div>
         </div>
     </div>
 </x-app-layout>