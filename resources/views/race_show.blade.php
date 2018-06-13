@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 card-group">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ $race->name }}, {{$race->date}}</h4>
                <p class="card-text">Track: {{ $race->track->name }}</p>
                <p class="card-text">Number of partcipants: {{ $race->Nm }}</p>
                <p class="card-text">Championship: {{ $race->champ->name }}</p>


                @if ( !Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isApprove()) )
                <p class="card-text">
                    <a class="btn btn-primary btn-sm" href="{{ url('race', $race['id']) }}/delete">Delete</a>
                </p>
                @endif
                </div>
            </div>
            <div class="card">
            <img class="card-img-top" src='{{ asset( $race->images()['asset_path'].$race->images()['image_small'] ) }}' >
            </div>
        </div>
    </div>
</div>
@endsection
