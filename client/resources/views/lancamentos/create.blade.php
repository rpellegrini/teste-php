@extends('core.base')
@section('content')

  <h2>Nova Despesa</h2>

  {!! Form::open(['id'=>'formAddDespesa', 'route'=>['despesa.store'], 'method'=>'post']) !!}

   @include('lancamentos._form')
   <div class="col-md-12 text-right">
      <button class="btn btn-success" type="submit" data-toggle="tooltip" title="Cadastrar" > <span>Cadastrar</span></button>
   </div>

  {!! Form::close() !!}

@endsection

@section('scripts')
@parent
<script type="text/javascript">
    $(document).ready(function () {
      $('#valor').mask('000.000.000,00', {reverse: true});

    $('.data').datepicker({
      format: 'mm/dd/yyyy',
      startDate: '-3d'
    });

    });
</script>
@endsection
