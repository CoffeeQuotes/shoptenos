@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form class="col s12 m6" action="" method="POST">
            @csrf
            <h3>Tneos Products</h3>
            <h5 class="blue-grey-text">Contact Information</h5>
            <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
