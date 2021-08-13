@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza Orders
        </div>
        @foreach($pizzas as $pizza)
        <div>
            {{$pizza->name}} - {{$pizza->type}} - {{$pizza->type}}
        </div>
        @endforeach
    </div>
</div>
@endsection
