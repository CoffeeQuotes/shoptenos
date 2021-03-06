{{-- @extends('layouts.app')
@section('content') --}}

<h2>Categories</h2>
@foreach ($categories as $category)
<label>
    <input name="category" type="checkbox" value="{{ $category->id }}"
    @if (in_array($category->id, explode(',', request()->input('filter.category'))))
                checked
           @endif
    />
    {{ $category->name }}
</label>
@endforeach
<button type="button" id="filter">Filter</button>
@foreach($products as $key => $product)
        {{$product->name}}
        {! $product->description !}
        <button class="btn btn-lg">Add To Cart</button>
@endforeach
<script>
    function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
                .filter(ch => ch.checked==true)
                .map(ch => ch.value);
        return ids;
    }

    function filterResults () {
        let catagoryIds = getIds("catagory");

        let href = 'products?';

        if(catagoryIds.length) {
            href += '&filter[category]=' + catagoryIds;
        }

        document.location.href=href;
     }
     document.getElementById("filter").addEventListener("click", filterResults);
</script>
{{-- @endsection --}}
