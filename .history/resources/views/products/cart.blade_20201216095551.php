@extends('layouts.app')
@section('content')
  <div class="container">
    @if(session('message'))
        <script>
          Materialize.toast("{{ @session('message') }}", 5000);
        </script>
    @endif
  <table>
        <thead>
          <tr>
              <th>Products</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <?php $total = 0 ?>
          @if (session('cart'))
            @foreach (session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
              <tr>
                <td data-th="Product">
                  <div class="row">
                    <div class="col s3 m3">
                      <img src="{{ Voyager::image($details['image']) }}" width="100" height="100" class="responsive-img"/>
                    </div>
                    <div class="col s9 m9">
                      <h6 style="margin:0;" class="grey-text"><b>{{ ucfirst($details['name']) }}</b></h6>
                      <span class="indigo-text"><b> {{ $details['subject'] }} {{ $details['board'] }}  {{ $details['class'] }}th class </b></span>
                    </div>
                  </div>
                </td>
                <td class="grey-text" data-th="Price">₹ {{ $details['price'] }}</td>
                <td data-th="Quantity">
                   <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                </td>
                <td class="grey-text" data-th="Subtotal">
                  ₹{{ $details['price'] * $details['quantity'] }}
                </td>
                <td class="actions" data-th="">
                        <button class="btn amber lighten-2 btn-sm update-cart" data-id="{{ $id }}"><i class="material-icons black-text">refresh</i></button>
                        <button class="btn red accent-3 btn-sm remove-from-cart" data-id="{{ $id }}"><i class="material-icons white-text">delete_sweep</i></button>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
        <tfoot>
       <tr>
           <td><a href="{{ url('/products') }}" class="btn waves-effect waves-light blue darken-1"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
           <td colspan="2" class="hidden-xs"></td>
           <td class="hidden-xs text-center"><strong>Total ₹{{ $total }}</strong></td>
       </tr>
       </tfoot>
      </table>
    </div>
@section('scripts')
  <script type="text/javascript">
       $(".update-cart").click(function (e) {
          e.preventDefault();
          var ele = $(this);
           $.ajax({
              url: '{{ url('update-cart') }}',
              method: "patch",
              data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
              success: function (response) {
                  window.location.reload();
              }
           });
       });
       $(".remove-from-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
           if(confirm("Are you sure")) {
               $.ajax({
                   url: '{{ url('remove-from-cart') }}',
                   method: "DELETE",
                   data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                   success: function (response) {
                       window.location.reload();
                   }
               });
           }
       });
   </script>
 @endsection
@endsection
