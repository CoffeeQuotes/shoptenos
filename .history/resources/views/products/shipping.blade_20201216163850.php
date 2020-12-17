@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <h3>Tneos Products</h3>
            <h2>{{ session('user')['email'] }}</h2>
        </div>
    <div class="col mt-5 s12 m4">
        <?php $total = 0 ?>
        @if (session('cart'))
            @foreach (session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
            <div class="row">
                <div class="s4 col m4">
                    <img src="{{ Voyager::image($details['image']) }}" width="100" height="100" class="responsive-img"/>
                </div>
                <div class="s8 col m8">
                    <h6 style="margin:0;" class="grey-text"><b>{{ ucfirst($details['name']) }}</b></h6>
                    <span class="indigo-text"><b> {{ $details['subject'] }} {{ $details['board'] }}  {{ $details['class'] }}th class </b></span>
                    <br>
                    <span class="grey-text">Quantity: {{ $details['quantity'] }}</span>
                    <br>
                    <span class="grey-text">₹ {{ $details['price'] }}</span>
                    <br><b>Subtotal: ₹{{ $details['price'] * $details['quantity'] }}</b>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="s4 m4 right-align">
                    Total:<span class="blue-grey-text">  ₹{{ $total }}</span>
                </div>

            </div>
        </div>
        @endif
    </div>
</div>
@endsection
