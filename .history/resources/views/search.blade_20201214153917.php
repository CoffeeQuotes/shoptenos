@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
  <div class="card-title">
    <b>{{ $searchResults->count() }} results found</b>
  </div>
    <div class="card-content">
      @foreach($searchResults->groupByType() as $type => $modelSearchResults)
        <h2>{{ ucfirst($type) }}</h2>
    </div>
        <div class="card-reveal">
            <div class="collection">
                @foreach ($modelSearchResults as $searchResults)
                    <a href="{{ $searchResults->url }}" class="collection-item">{{ $searchResults->title }}</a>
                @endforeach
            </div>
        </div>
      @endforeach

      <div class="collection">

      </div>

    </div>
  </div>
</div>
@endsection
