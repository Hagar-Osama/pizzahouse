@extends('layouts.app')
@section('content')
<div class="wrapper pizza-details">
    <h1>Order For {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">base - {{$pizza->base}}</p>
    <p class="toppings">Extra Toppings:</p>
    <Ul>

    @foreach($pizza->toppings as $topping)
    <li>{{$topping}}</li>
    @endforeach
    </Ul>
<form action = "{{route('pizza.destroy', $pizza->id)}}" method = "POST">
@csrf
<!--@method('DELETE')   version 6-->
{{method_field('DELETE')}}


<button>Complete Order</button>

</form>
</div>
<a href="/pizzas">
    <-- Back To All Pizzas</a>
        @endsection
