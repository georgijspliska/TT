@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>@lang('messages.users')</h4></div>
                <div class="list-group-item">
                    @foreach ( $users as $user )
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">
                          <?php $i=$user->role; ?>
                            {{ $user->name }} , {{ $user->email }} @if ($i==3) (@lang('messages.approved'))@endif @if ($i==1) (@lang('messages.not_approved')) @endif
                        </h5>
                        @if ($i!=2)
                        {!! Form::open(['action' => array('UserController@approve', $user->id), 'files' => true, 'class' => 'form-horizontal']) !!}
                        {!! Form::submit(__('messages.change'), ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
