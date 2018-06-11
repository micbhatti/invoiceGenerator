@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Maker') }}</div>
				<div class="card-body">
					@if (Session::has('message'))
						{{Session::get('message')}}
					@endif
				</div>
                <div class="card-body">
					{!!Form::model($maker,array('route' => array('updateAccount',$maker->id)))!!}

						<div class="form-group row">
                            {!!Form::label('name','Name',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('name',null,['class'=>'form-control'])!!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            {!!Form::label('email','Email',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('email',null,['class'=>'form-control'])!!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            {!!Form::label('street','Street',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('street',null,['class'=>'form-control'])!!}

                                @if ($errors->has('street'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!!Form::label('phone','Phone',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('phone',null,['class'=>'form-control'])!!}

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            {!!Form::label('suite','Suite',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('suite',null,['class'=>'form-control'])!!}

                                @if ($errors->has('suite'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('suite') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            {!!Form::label('city','City',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('city',null,['class'=>'form-control'])!!}

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            {!!Form::label('province','Province',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('province',null,['class'=>'form-control'])!!}

                                @if ($errors->has('province'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            {!!Form::label('zip','Zip Code',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('zip',null,['class'=>'form-control'])!!}

                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            {!!Form::label('country','Country',['class'=>'col-md-4 col-form-label text-md-right'])!!}

                            <div class="col-md-6">
                               {!!Form::text('country',null,['class'=>'form-control'])!!}

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection