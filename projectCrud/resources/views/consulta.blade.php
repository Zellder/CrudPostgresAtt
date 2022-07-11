@extends('layouts.main')

@section('title', 'Consultar Documentos')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
   <h1>Lista de documentos cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-documentos-container">
   <table class="table ">
    <thead>
     <tr>
      <th scope="col ">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descrição</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ações</th>
     </tr>
    </thead>
       @if(count($documentos) > 0)
   <tbody>
    @foreach ($documentos as $documento)
     <tr>
         <td script="row">{{$loop->index+1}}</td>
         <td>{{$documento->titulo}}</td>
         <td>{{$documento->nome_arquivo}}</td>
         @foreach ($tipo_documentos as $tipo_documento)
            @if(($tipo_documento->id)== $documento->tipo_id)
                 <td>{{$tipo_documento->nome_tipo}}</td>
            @endif   
         @endforeach
         <td>
         <a href="{{ route('consulta.edit',$documento->id) }}" class="btn btn-primary">Editar</a>
         <form action="{{ route('consulta.destroy',$documento->id) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger">Apagar</button>
         </form>
         </td>
     </tr>
    @endforeach
   </tbody>
   @else
   <p>Você ainda não tem documentos , <a href="/create">Criar Documento</a></p>
   @endif
     </table>
     <input type="button" class="btn btn-secondary" onclick="location.href='/crud';" value="Voltar"/>
</div>
@endsection