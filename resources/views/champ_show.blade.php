@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 card-group">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ $champ->name }}, {{$champ->type}}</h4>
                <p class="card-text">@lang('messages.standing'): {{ $champ->standing }}</p>


                @if ( !Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isApprove()) )
                <p class="card-text">
                    <a class="btn btn-primary btn-sm" href="{{ url('champ', $champ['id']) }}/delete">@lang('messages.delete')</a>
                </p>
                @endif
                </div>
            </div>
            <div class="card">
            <img class="card-img-top" src='{{ asset( $champ->images()['asset_path'].$champ->images()['image'] ) }}' >
            </div>

        </div>
    </div>
</div>
@endsection
