
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        @foreach($carts as $cart)
                            <h1>Name: {{ $cart->pizza->name }}</h1>
                            <p> Price: {{ $cart->pizza->price }}</p>
                            <p> Qty: {{ $cart->qty }}</p>
                            <img src="{{ $cart->pizza->image }}" alt="image">

                            <p>Subtotal: {{ $cart->qty * $cart->pizza->price }}</p>
                        @endforeach
                            <p>Total: {{ $order->total }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
