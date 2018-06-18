@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.add_new_photo')</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'PhotoController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', __('messages.name'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('date', __('messages.date'),['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::datetime('date', \Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control '.($errors->has('start_time') ? ' is-invalid' : '' ), 'placeholder' => 'yyyy-mm-dd']) !!}
                    @if ($errors->has('date'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('description', __('messages.description'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('description', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('race_id', __('messages.race'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('race_id', $races, '', ['class' => 'form-control '.($errors->has('auditorium') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('race_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('race_id') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('image', __('messages.photo'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::file('image', ['class'=>'form-control btn btn-md'.($errors->has('image_small') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>


                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {!! Form::submit(__('messages.create'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
