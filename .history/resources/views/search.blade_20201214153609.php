@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
    <b>{{ $searchResults->count() }} results</b>
  </div>
    <div class="card-body">
      @foreach($searchResults->groupByType() as $type => $modelSearchResults)
        <h2>{{ ucfirst($type) }}</h2>
        <div class="collection">
            @foreach ($modelSearchResults as $searchResults)
                <a href="{{ $searchResults->url }}" class="collection-item">{{ $searchResults->title }}</a>
            @endforeach
        </div>
      @endforeach

      <div class="collection">

      </div>

    </div>
  </div>
</div>
@endsection
