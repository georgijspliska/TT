@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new race</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'RaceController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Race name', ['class' => 'col-md-4 control-label text-md-right']) !!}
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
                    {!! Form::label('date', 'Date',['class' => 'col-md-4 control-label text-md-right']) !!}
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
                    {!! Form::label('track_id', 'Race Track', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('track_id', $tracks, '', ['class' => 'form-control '.($errors->has('auditorium') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('track_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('track_id') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('Nm', 'Number of participants', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::number('Nm', '', ['class' => 'form-control '.($errors->has('length') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('Nm'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('Nm') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
                    <div class="form-group row">
                    {!! Form::label('champ_id', 'Championship', ['class' => 'col-md-4 control-label text-md-right']) !!}
                    <div class="col-md-6">
                    {!! Form::select('champ_id', $champs, '', ['class' => 'form-control '.($errors->has('auditorium') ? ' is-invalid' : '' )]) !!}
                    @if ($errors->has('champ_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('track_id') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
