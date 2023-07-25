
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
                       @foreach($pizzas as $pizza)
                           <div>
                               <h1> Name: {{ $pizza->name }}</h1>
                               <p> Description: {{$pizza->description}}</p>
                               <p> Price: {{$pizza->price}} $</p>
                               <img src="{{$pizza->image}}" alt="image">
                               <p><a href="{{ route('pizzas.show', $pizza->id) }}">Show</a></p>

                               <form action="{{ route('orders.store') }}" method="POST">
                                   @csrf

                                   <input type="text" name="qty" value="1">
                                   <input type="hidden" name="pizza_id" value="{{ $pizza->id }}">
                                   <button type="submit">Add to card</button>
                               </form>

                           </div>
                       @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
