@extends('layouts.normal_layout')


@section('title')
    InnovX Task - Home
@endsection

@php

@endphp


@section('customer_content')
hello i am from customer index {{ Auth::user()?->name }}

@endsection