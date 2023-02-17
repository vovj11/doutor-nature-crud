@extends('templates.template')

@section('content')
  <h1 class="text-center">Visualizar</h1>

  <div class="col-8 m-auto">
      Código: {{$produto->codigo}}<br>
      Nome: {{$produto->nome}}<br>
      Descrição: {{$produto->descricao}}<br>
      Preço: {{$produto->preco}}<br>

      <div class="mt-3 mb-4">
          <a href="{{url('produtos')}}">
              <button class="btn btn-primary">Voltar</button>
          </a>
      </div>
  </div>


@endsection
