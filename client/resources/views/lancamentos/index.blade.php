@extends('core.base')

@section('content')

  <h2>Contas a Pagar</h2>

<div class="box-content" style="margin-bottom:30px;">
  <span class="btn btn-success waves-effect waves-light " style="float:right">
       <a href="{{ route('despesa.create') }}" type="button">
           <span>Nova Despesa</span>
       </a>
  </span><br>

<br>
@if (session('success'))
    <div class="alert alert-success" style="padding-top: 15px;">
	      {{ session('success') }}
		</div>
@endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Descrição</th>
        <th scope="col">Valor</th>
        <th scope="col">Data</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($lancamentos as $lancamento)
        <tr>
          <td>{{$lancamento->descricao}}</td>
          <td>{{$lancamento->valor}}</td>
          <td>{{$lancamento->data}}</td>
          <td>
            <button type="button" class="btn btn-light btn-xs waves-effect waves-light" onclick="javascript:window.location.href ='{{ route('despesa.create', ['id'=> $lancamento->id] ) }}';"><i class="ico fa fa-pencil"></i>Editar</button>&nbsp;
            <button type="button" class="btn btn-danger btn-xs waves-effect waves-light" onclick="javascript:window.location.href ='{{ route('despesa.create', ['id'=> $lancamento->id] ) }}';"><i class="ico fa fa-remove"></i>Remover</button>
          </td>
        </tr>
        @empty
        <p>Nenhum Lançamento</p>
        @endforelse
      </tr>
    </tbody>
  </table>

</div>


@endsection
