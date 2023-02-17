@extends('templates.template')

@section('content')
  <h1 class="display-5 text-center fw-bold mb-4">Produtos</h1>

  <div class="col-8 m-auto">
      @csrf
  <table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($produto as $produtos)
        <tr>
            <th scope="row">{{$produtos->id}}</th>
            <td>{{$produtos->codigo}}</td>
            <td>{{$produtos->nome}}</td>
            <td>{{$produtos->descricao}}</td>
            <td>{{$produtos->preco}}</td>
            <td>
                <a href="{{url("produtos/$produtos->id")}}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="{{url("produtos/$produtos->id/edit")}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <a href="{{url("produtos/$produtos->id")}}" class="js-del">
                    <button class="btn btn-danger">Deletar</button>
                </a>
            </td>
        </tr>
    @endforeach

  </tbody>
</table>

      {{$produto->links('pagination::bootstrap-4')}}

      <div class="text-center mt-3 mb-4">
          <a href="{{url('produtos/create')}}">
              <button class="btn btn-success btn-lg">Cadastrar</button>
          </a>
      </div>
  </div>
@endsection
