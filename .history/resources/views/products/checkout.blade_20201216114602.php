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
                  <option value="Andaman and Nicobar Islands" data-select2-id="12">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh" data-select2-id="13">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh" data-select2-id="14">Arunachal Pradesh</option>
                  <option value="Assam" data-select2-id="15">Assam</option>
                  <option value="Bihar" data-select2-id="16">Bihar</option>
                  <option value="Chandigarh" data-select2-id="17">Chandigarh</option>
                  <option value="Chhattisgarh" data-select2-id="18">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli" data-select2-id="19">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu" data-select2-id="20">Daman and Diu</option>
                  <option value="Delhi" data-select2-id="6">Delhi</option>
                  <option value="Goa" data-select2-id="21">Goa</option>
                  <option value="Gujarat" data-select2-id="22">Gujarat</option>
                  <option value="Haryana" data-select2-id="23">Haryana</option>
                  <option value="Himachal Pradesh" data-select2-id="24">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir" data-select2-id="25">Jammu and Kashmir</option>
                  <option value="Jharkhand" data-select2-id="26">Jharkhand</option>
                  <option value="Karnataka" data-select2-id="27">Karnataka</option>
                  <option value="Kerala" data-select2-id="28">Kerala</option>
                  <option value="Lakshadweep" data-select2-id="29">Lakshadweep</option>
                  <option value="Madhya Pradesh" data-select2-id="30">Madhya Pradesh</option>
                  <option value="Maharashtra" data-select2-id="31">Maharashtra</option>
                  <option value="Manipur" data-select2-id="32">Manipur</option>
                  <option value="Meghalaya" data-select2-id="33">Meghalaya</option>
                  <option value="Mizoram" data-select2-id="34">Mizoram</option>
                  <option value="Nagaland" data-select2-id="35">Nagaland</option>
                  <option value="Orissa" data-select2-id="36">Orissa</option>
                  <option value="Pondicherry" data-select2-id="37">Pondicherry</option>
                  <option value="Punjab" data-select2-id="38">Punjab</option>
                  <option value="Rajasthan" data-select2-id="39">Rajasthan</option>
                  <option value="Sikkim" data-select2-id="40">Sikkim</option>
                  <option value="Tamil Nadu" data-select2-id="41">Tamil Nadu</option>
                  <option value="Telangana" data-select2-id="42">Telangana</option>
                  <option value="Tripura" data-select2-id="43">Tripura</option>
                  <option value="Uttar Pradesh" data-select2-id="44">Uttar Pradesh</option>
                  <option value="Uttarakhand" data-select2-id="45">Uttarakhand</option>
                  <option value="West Bengal" data-select2-id="46">West Bengal</option>
                </select>
                <label>Materialize Multiple Select</label>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                  <input id="pincode" type="text" class="validate">
                  <label for="Pincode">PIN Code</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Phone" id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Phone</label>
                </div>
            </div>
            <div class="row">
                <div class="s12 col m6">
                    <a class="waves-effect p-1 green-text waves-light" href="/cart">Return To Cart</a>
                </div>
                <div class="s12 col m6">
                    <button class="btn orange darken-3 waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons right">local_shipping
                    </i>Continue to Shipping
                      </button>
                </div>

            </div>


        </form>
    </div>
</div>
@endsection
