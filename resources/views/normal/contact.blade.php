@extends('layouts.normal_layout')

@section('title')
    InnovX Task - Contact
@endsection


@section('customer_content')
    <div class="container">
        <div class="contact-container mx-auto col-lg-8">
            <h1 class="contact-title text-center">Get In Touch</h1>
            <div class="contact-info mt-4">
                <p><strong>GitHub:</strong> <a href="https://github.com/abunaiim25" target="_blank">github.com/abunaiim25</a></p>
                <p><strong>Portfolio:</strong> <a href="https://abu-naiim.netlify.app/" target="_blank">abu-naiim.netlify.app</a></p>
                <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/abu-naiim-516949210" target="_blank">linkedin.com/in/abu-naiim</a></p>
                <p><strong>Phone:</strong> <a href="tel:01316057864">01316057864</a></p>
                <p><strong>Office Email:</strong> <a href="mailto:rayhan@ba-systems.com">rayhan@ba-systems.com</a></p>
                <p><strong>Personal Email:</strong> <a href="mailto:naiimabu25@gmail.com">naiimabu25@gmail.com</a></p>
            </div>
        </div>
    </div>
@endsection


<style>
    body {
        background: url('https://images.unsplash.com/photo-1542744173-05336fcc7ad4?auto=format&fit=crop&w=1400&q=80') no-repeat center center fixed;
        background-size: cover;
    }

    .contact-container {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        margin-top: 80px;
    }

    .contact-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    .contact-info p {
        font-size: 1.1rem;
        color: #34495e;
        margin-bottom: 12px;
    }

    .contact-info a {
        color: #007bff;
        text-decoration: none;
    }

    .contact-info a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .contact-title {
            font-size: 2rem;
        }

        .contact-info p {
            font-size: 1rem;
        }
    }
</style>
