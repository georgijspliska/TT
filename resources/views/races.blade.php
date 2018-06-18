@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>@lang('messages.races')</h4></div>

                <div class="list-group-item">
                    <div class="card-deck">
                    <?php $i=0; ?>
                    @foreach ( $races as $race )
                    @if ($i==4)
                        <?php $i=1; ?>
                        </div>
                        <div class="card-deck">
                    @else <?php $i++; ?>
                    @endif
                    <div class="card">
                        <div class="card-body">

                          <div class="card-img-top">
                              <a href="{{ url('race', $race['id']) }}">
                                  <img class="img-thumbnail" src="{{ asset( $race->images()['asset_path'].$race->images()['image_small'] ) }}" alt="">
                              </a>
                          </div>

                        <h5 class="card-title">
                            <a href="{{ url('race', $race['id']) }}">{{ $race->name }}, {{ $race->type }}</a>
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
