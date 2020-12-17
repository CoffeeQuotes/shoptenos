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
            <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Address" id="Address" type="text" class="validate">
                  <label for="Address">Address</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Apartment (Optional)" id="Apartment" type="text" class="validate">
                  <label for="Apartment">Apartment</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input placeholder="City" id="Apartment" type="text" class="validate">
                  <label for="City">City</label>
                </div>
            </div>
            <div class="input-field col s12 m4">
                <select>
                  <option value="1">India</option>
                </select>
                <label>Country/Region</label>
            </div>
            <div class="input-field col s12 m4">
                <select multiple>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
                <label>Materialize Multiple Select</label>
            </div>


        </form>
    </div>
</div>
@endsection
