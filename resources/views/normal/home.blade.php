@extends('layouts.normal_layout')


@section('title')
    InnovX Task - Home
@endsection

@php

@endphp



@section('customer_content')
    <div class="hero-image">
        <img src="{{ asset('normal/images/home.jpg') }}" alt="Home">
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Welcome to Our Home</h1>
            <p>All information on task page, where user can create, show, update and delete there task.</p>

            <a class="btn_design" href="{{ route('normal.task') }}">Click on task page</a>
        </div>
    </div>


    <style>
        .btn_design{
            background: linear-gradient(90deg,rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
            padding:  10px 20px 10px 20px;
            color:white;
            border-radius: 10px;
            font-size: 25px;
            font-weight: 600
        }
        .btn_design:hover{
            color: black;
        }
        a{
            text-decoration: none
        }

        .hero-image {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-image .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.678);
            /* darkness */
            z-index: 1;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            z-index: 2;
            text-align: center;
        }
    </style>
@endsection
