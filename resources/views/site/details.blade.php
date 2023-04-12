@extends('site.layout')

@section('titulo' , 'detalhes')

@section('conteudo')

   
    
    
    <div class="row container " style="margin-top: 10px">
       
        <div class="col s12 m6"><br>
          <img src="{{$produto->imagem}} " class="responsive-img" alt="{{$produto->nome}}">  
        </div>

        <div class="col s12 m6">
          
            <h4>{{$produto->nome}}</h4>
            <h4>RS: {{number_format($produto->preco,2, "," , ".") }}</h4>
            <p>{{$produto->descricao}}</p>
            <p>postado por {{$produto->user->fisrtsName}}</p>
            <p>postado por {{$produto->categoria->nome}}</p>
            <button class="btn orange btn-large">Comprar</button>
        </div>

    </div>
    
   
@endsection