@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>@lang('messages.championships')</h4></div>

                <div class="list-group-item">
                    <div class="card-deck">
                    <?php $i=0; ?>
                    @foreach ( $champs as $champ )
                    @if ($i==4)
                        <?php $i=1; ?>
                        </div>
                        <div class="card-deck">
                    @else <?php $i++; ?>
                    @endif
                    <div class="card">
                        <div class="card-body">

                          <div class="card-img-top">
                              <a href="{{ url('champ', $champ['id']) }}">
                                  <img class="img-thumbnail" src="{{ asset( $champ->images()['asset_path'].$champ->images()['image'] ) }}" alt="">
                              </a>
                          </div>

                        <h5 class="card-title">
                            <a href="{{ url('champ', $champ['id']) }}">{{ $champ->name }}, {{ $champ->type }}</a>
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
