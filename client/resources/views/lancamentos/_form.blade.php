					<div class="card-conten">
						@if( isset($errors) && count($errors) > 0 )
						    <div class="alert alert-danger">
						        @foreach( $errors->all() as $error )
						            <p>{{$error}}</p>
						        @endforeach
						    </div>
					    @endif

            <form>
							<div class="form-group col-12">
								<div class="form-group col-12">
								 {!! Form::label('descricao', 'Descrição: ', ['class' => 'color-blue']) !!}
								    {!! Form::text('descricao', null, ['class'=>'form-control','id' => 'descricao', 'autocomplete' => 'off', 'placeholder' => '']) !!}
          							  @if ($errors->has('descricao'))
          								<span class="help-block">
            								{{ $errors->first('descricao') }}
          								</span>
          							 @endif
							    </div>
							</div>

							<div class="form-group col-12">
								<div class="form-group col-12">
								 {!! Form::label('valor', 'Valor R$: ', ['class' => 'color-blue']) !!}
								    {!! Form::text('valor', null, ['class'=>'form-control','id' => 'valor', 'autocomplete' => 'off']) !!}
          							  @if ($errors->has('valor'))
          								<span class="help-block">
            								{{ $errors->first('valor') }}
          								</span>
          							 @endif

							</div>

              <div class="form-group col-6">
								<div class="form-group col-6">
								 {!! Form::label('data', 'Data: ', ['class' => 'color-blue']) !!}
								    {!! Form::text('data', null, ['class'=>'form-control data','id' => 'data', 'autocomplete' => 'off', 'placeholder' => '']) !!}
          							  @if ($errors->has('description'))
          								<span class="help-block">
            								{{ $errors->first('description') }}
          								</span>
          							 @endif
							    </div>
							</div>
					</div>
