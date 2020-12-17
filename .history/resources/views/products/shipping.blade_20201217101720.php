@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <h3>Tneos Products</h3>
            <table class="responsive-table">
                <tbody>
                    <tr>
                       <th> Contact: </th>
                       <td> {{ session('user')['email'] }} </td>
                    </tr>
                    <tr>
                      <th> Ship To: </th>
                      <td> {{ session('user')['address']}} </td>
                   </tr>
                   <tr>
                      <th> Phone: </th>
                      <td>{{ session('user')['phone']}}</td>
                   </tr>
                </tbody>
              </table>
              <h5>Shipping</h5>
            <h6 class="green-text">Free Shipping</h6>
            <div class="row">
                <div class="s12 col m6">
                    <a class="waves-effect py-4 green-text waves-light" href="/cart">Return To Cart</a>
                </div>
                <div class="s12 col m6">
                    <form action="{{ route('payment')}}" method="post">
                        @if(Session::has('user'))
                            @if(Session::has("user['firstname']"))
                                <input type="hidden" name="firstname" value="{{ session('user')['firstname'] }}">
                            @endif
                            <input type="hidden" name="lastname" value="{{ session('user')['lastname']}}"/>
                            @if(Session::has("user['apartment']"))
                                <input type="hidden" name="apartment" value="{{ session('user')['apartment']}}"/>
                            @endif
                            @if(Session::has("user['company']"))
                                <input type="hidden" name="apartment" value="{{ session('user')['apartment']}}"/>
                            @endif
                            <input type="hidden" name="address" value="{{ session('user')['address']}}">
                            <input type="hidden" name="pincode" value="{{ session('user')['pincode']}}">
                            <input type="hidden" name="phone" value="{{ session('user')['phone']}}" />
                            <input type="hidden" name="email" value= "{{ session('user')['email']}}"/>
                            <input type="hidden" name="address" value="{{ session('user')['address']}}">
                            <input type="hidden" name="pincode" value="{{ session('user')['pincode']}}">
                            <input type="hidden" name="city" value="{{ session('user')['city']}}">
                            <input type="hidden" name="state" value="{{ session('user')['state']}}">
                            <input type="hidden" name="country" value="{{ session('country')}}" />

                            <textarea name="products" class="hide">
                                <?php $total = 0 ?>
                                @if (session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        <?php $total += $details['price'] * $details['quantity'] ?>
                                        | {{$id}} | Product - {{$details['name']}} ,| Quantity -  {{ $details['quantity']}} ,| Subtotal - {{  $details['price'] * $details['quantity']  }}| <br />
                                    @endforeach
                                    Total: ₹ {{ $total }}
                                @endif;
                            </textarea>
                            <input type="hidden" name="amount" value="{{$total}}"/>
                        @endif

                    <button class="btn green accent  waves-effect waves-light btn-large" type="submit" name="action"><i class="material-icons right">local_shipping
                    </i>Continue to Payment
                      </button>
                    </form>
                </div>

            </div>
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
