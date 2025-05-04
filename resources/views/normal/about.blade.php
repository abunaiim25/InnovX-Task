@extends('layouts.normal_layout')

@section('title')
    InnovX Task - About
@endsection


@section('customer_content')
    <div class="container py-4" style="margin-top: 60px">
        <div class="about-card">
            <div class="about-content">
                <h1 class="about-title">About Me</h1>
                <p class="about-description">
                    My name is <strong>Abu Naiim</strong>, and I am passionate about <strong>software development</strong>, 
                    <strong>data science</strong>, and <strong>machine learning</strong>. I am currently pursuing my 
                    <em>Master of Science (M.Sc.)</em> in Information Technology at <strong>Jahangirnagar University</strong>, 
                    and I have completed my <em>Bachelor of Science (B.Sc.)</em> in Computer Science and Engineering from 
                    <strong>Daffodil International University</strong>. Professionally, I am working at 
                    <strong>Business Automation Ltd.</strong>, where I contribute to meaningful digital transformation projects.
                </p>
            </div>
        </div>
    </div>
@endsection

<style>
    .about-card {
        min-height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, rgba(87, 199, 133, 1) 0%, rgba(42, 123, 155, 1) 100%);
        border-radius: 20px;
        padding: 40px;
        color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .about-content {
        max-width: 800px;
        text-align: center;
    }

    .about-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .about-description {
        font-size: 1.2rem;
        line-height: 1.8;
    }

    @media (max-width: 768px) {
        .about-title {
            font-size: 2rem;
        }

        .about-description {
            font-size: 1rem;
        }
    }
</style>

