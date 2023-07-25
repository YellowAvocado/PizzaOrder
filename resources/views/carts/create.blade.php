<form action="{{route('carts.store')}}" method="POST">
    @csrf

    <select name="pizza_id" id="pizza_id">
        <option value="">Choose pizza</option>
        @foreach($carts as $cardt)
           {{-- <option value="{{ $carts->user_id}}"> --}}{{--{{ $pizza->name }}--}}{{-- </option>--}}

            <p>{{ $cart->pizza_id }}</p>
        @endforeach
    </select>

    <button type="submit">Buy</button>

</form>
