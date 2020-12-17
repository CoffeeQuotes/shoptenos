@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">
    <b>{{ $searchResults->count() }} results</b>
  </div>
    <div class="card-body">
      @foreach($searchResults->groupByType() as $type => $modelSearchResults)
        <h2>{{ ucfirst($type) }}</h2>

        @foreach ($modelSearchResults as $searchResults)
          <ul>
            <li><a href="{{ $searchResults->url }}">{{ $searchResults->title }}</a></li>
            <li>{{ $searchResults->price }}</a></li>
          </ul>
        @endforeach
      @endforeach
    </div>
  </div>
@endsection
