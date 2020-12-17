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

        @foreach ($modelSearchResults as $searchResults)
          <ul>
            <li><a href="{{ $searchResults->url }}">{{ $searchResults->title }}</a></li>
          </ul>
        @endforeach
      @endforeach

      <div class="collection">
        <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
        <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
        <a href="#!" class="collection-item">Alan</a>
        <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
      </div>

    </div>
  </div>
</div>
@endsection
