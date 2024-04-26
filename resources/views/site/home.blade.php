@extends('site.layout')
@section('title','Essa é a pagina Home')

@section('conteudo')
    <h1>Essa é a nossa home.</h1>

{{-- Isso é um comentário --}}

{{-- {{isset($nome) ? 'existe' : 'não existe'}} --}}

{{-- {{$teste ?? 'padrão' }} --}}

@if ($nome == 'Jumento')
    true<br>
@else
    false
@endif

@unless ($nome == 'rodrigo')
    Não é rodrigo <br>
@else
    É rodrigo <br>
@endunless


@switch($idade)
    @case(100)
        Vc é muito novo <br>
        @break
    @case(1000)
        Apesar de não ser velho o suficiente já está no ponto <br>
        @break
    @default
        default <br>
@endswitch

@isset($nome)
    existe <br>
@endisset

@empty($nome)
    vazia <br>
@endempty

@auth
    está autenticado <br>
@endauth

@guest
    não está autenticado <br>   
@endguest

@for ($i = 0; $i < 10; $i++)
    valor atual é {{$i}} <br>
@endfor

@php
    $i = 0; 
@endphp


@while ($i <= 10)
    valor atual é {{$i}} <br>
    @php
        $i++;
    @endphp
@endwhile

@foreach ($frutas as $fruta)
    {{$fruta}} <br>
@endforeach

@forelse ($frutas as $fruta)
    {{$fruta}} <br>
@empty
    array esta vazio
@endforelse


@endsection

