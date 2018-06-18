@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.add_new_championship')</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'ChampController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', __('messages.championship_name'), ['class' => 'col-md-4 control-label text-md-right']) !!}
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
                    {!! Form::label('standing', __('messages.standing'), ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('standing', '', ['class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('standing'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('standing') }}</strong>
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
