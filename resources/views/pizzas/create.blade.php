@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
  @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="dynamite chicken ranch">Dynamite Chicken Ranch</option>
      <option value="pepperoni">Pepperoni</option>
    </select>
    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="thick">Thick</option>
      <option value="thin crust">Thin Crust</option>
      <option value="cheese bites">Cheese Bites</option>
      <option value="stuffed crust">Stuffed Crust</option>
    </select>
    <fieldset>
    <label>Extra Toppings:</label>
    <input type = "checkbox" name ="toppings[]" value="mushroum">Mushroum<br />
    <input type = "checkbox" name ="toppings[]" value="peppers">Peppers<br />
    <input type = "checkbox" name ="toppings[]" value="garlic">Garlic<br />
    <input type = "checkbox" name ="toppings[]" value="olives">Olive<br />



    </fieldset>
    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection
