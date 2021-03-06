@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.add_new_track')</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'TrackController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

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
                    {!! Form::label('type', __('messages.type'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('type', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('type'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('location', __('messages.location'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('location', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('location'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('lenght', __('messages.lenght'),['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('lenght', '', ['class' => 'form-control '.($errors->has('rating') ? ' is-invalid' : '' ), 'step' => '0.1', 'min' => 0, 'max' => 10]) !!}
                    @if ($errors->has('lenght'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lenght') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('turns', __('messages.turns'),['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('turns', '', ['class' => 'form-control '.($errors->has('rating') ? ' is-invalid' : '' ), 'step' => '0.1', 'min' => 0, 'max' => 20]) !!}
                    @if ($errors->has('turns'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('turns') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('record', __('messages.record'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::text('record', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('record'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('record') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('image', __('messages.image'), ['class' => 'col-md-4 control-label text-md-right']) !!}
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
