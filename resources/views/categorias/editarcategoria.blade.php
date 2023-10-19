@extends('layout.app')

@section('body')
    <div class="card border row-margin-top-20">
        <div class="card-body">
            <form action="{{ route('categorias.update', ['id'=>$cat->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria" value="{{$cat->nome}}">
                </div>
                <div class="row-margin-top-20">
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a href="{{ route('categorias.index') }}" class="btn btn-danger btn-sm">Cancelar</a>                    
                </div>                
            </form>
        </div>
    </div>
@endsection