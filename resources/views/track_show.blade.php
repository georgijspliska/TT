@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 card-group">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{ $track->name }}, {{$track->type}}</h4>
                <p class="card-text">{{ $track->location }}</p>
                <p class="card-text">Record: {{ $track->record }}</p>
                <p class="card-text">Turns: {{ $track->turns }}</p>
                <p class="card-text">Length: {{ $track->lenght }}</p>


                @if ( !Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isApprove()) )
                <p class="card-text">
                    <a class="btn btn-primary btn-sm" href="{{ url('track', $track['id']) }}/delete">Delete</a>
                </p>
                @endif
                </div>

            </div>
            <div class="card">
            <img class="card-img-top" src='{{ asset( $track->images()['asset_path'].$track->images()['image'] ) }}' >
            </div>


        </div>
    </div>
</div>
@endsection
