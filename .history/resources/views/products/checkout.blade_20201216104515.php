@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form class="col s12 m8" action="" method="POST">
            @csrf
            <h3>Tneos Products</h3>
            <h5 class="blue-grey-text">Contact Information</h5>
            <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
            </div>
            <h5 class="blue-grey-text">Shipping Address</h5>
            <div class="row">
                <div class="input-field col s6">
                  <input placeholder="First name (Optional)" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input placeholder="Last name" id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Company (Optional)" id="Company" type="text" class="validate">
                  <label for="Company">Company</label>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
