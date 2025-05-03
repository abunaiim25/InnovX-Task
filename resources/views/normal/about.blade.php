@extends('layouts.normal_layout')


@section('title')
    InnovX Task - About
@endsection

@php

@endphp

<style>
.card{
    height: 60vh; 
    display:flex; 
    justify-content:center; 
    align-items:center; 
    background:linear-gradient(90deg,rgba(87, 199, 133, 1) 0%, rgba(42, 123, 155, 1) 100%);
}
</style>

@section('customer_content')
<div class="container">
    <div class="card mt-5">
        <h1 class="text-white">This is About Page</h1>
    </div>
</div>
@endsection