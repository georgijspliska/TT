@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>Photos</h4></div>

                <div class="list-group-item">
                    <div class="card-deck">
                    <?php $i=0; ?>
                    @foreach ( $photos as $photo )
                    @if ($i==4)
                        <?php $i=1; ?>
                        </div>
                        <div class="card-deck">
                    @else <?php $i++; ?>
                    @endif
                    <div class="card">
                        <div class="card-body">

                          <div class="card-img-top">
                              <a href="{{ url('uploads', $photo['id']) }}_photo.jpg">
                                  <img class="img-thumbnail" src="{{ asset( $photo->images()['asset_path'].$photo->images()['image'] ) }}" alt="">
                              </a>
                          </div>

                        <h5 class="card-title">
                            <a href="{{ url('uploads', $photo['id']) }}_photo.jpg">{{ $photo->name }}, {{ $photo->type }}</a>
                        </h5>
                        @if ( !Auth::guest() && (Auth::user()->isAdmin() || Auth::user()->isApprove()) )
                        <p class="card-text">
                            <a class="btn btn-primary btn-sm" href="{{ url('photo', $photo['id']) }}/delete">Delete</a>
                        </p>
                        @endif

                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
