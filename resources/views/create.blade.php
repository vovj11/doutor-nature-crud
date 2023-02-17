@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($produto)) Editar @else Cadastrar @endif</h1>

    <div class="col-8 m-auto">


            @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
            @endif

        @if(isset($produto))
                    <form name="formEdit" id="formEdit" method="post" action="{{url("produtos/$produto->id")}}">
                        @method('PUT')
        @else

        <form name="formCard" id="formCad" method="post" action="{{url("produtos")}}">
        <?php $codigo=sprintf('%07X', mt_rand(0, 0xFFFFFFF))?>

        @endif


            @csrf

                <label class="fw-bold">Código: </label>
                <input class="form-control mb-3" name="codigo" id="codigo" value="{{$produto->codigo ?? $codigo}}" required>
                <label class="fw-bold">Nome: </label>
                <input class="form-control mb-3" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$produto->nome ?? ''}}" required>
                <label class="fw-bold">Descrição: </label>
                <textarea class="form-control mb-3" type="textarea" name="descricao" id="descricao" placeholder="Descrição:" required>{{$produto->descricao ?? ''}}</textarea>
                <label class="fw-bold">Preço: </label>
                <input class="form-control mb-3" type="text" name="preco" id="preco" placeholder="Preço:" value="{{$produto->preco ?? ''}}" required>
                <div class="d-flex justify-content-center">
                <input class="btn btn-primary" type="submit" value="@if(isset($produto)) Editar @else Cadastrar @endif">
                </div>
        </form>

    </div>
@endsection

