@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>Tracks</h4></div>

                <div class="list-group-item">
                    <div class="card-deck">
                    <?php $i=0; ?>
                    @foreach ( $tracks as $track )
                    @if ($i==4)
                        <?php $i=1; ?>
                        </div>
                        <div class="card-deck">
                    @else <?php $i++; ?>
                    @endif
                    <div class="card">
                        <div class="card-body">
                          <div class="card-img-top">
                              <a href="{{ url('track', $track['id']) }}">
                                  <img class="img-thumbnail" src="{{ asset( $track->images()['asset_path'].$track->images()['image'] ) }}" alt="">
                              </a>
                          </div>

                        <h5 class="card-title">
                            <a href="{{ url('track', $track['id']) }}">{{ $track->name }}, {{ $track->type }}</a>
                        </h5>

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
