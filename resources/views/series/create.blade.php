@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')

        <form action="" method="get">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id=nome class="form-control">
            </div>
        </form>

        <button class="btn btn-primary mt-2">Adicionar</button>

    </div>

@endsection

