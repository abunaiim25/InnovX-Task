@extends('layouts.normal_layout')

@section('title')
    InnovX Task - Add
@endsection


@section('customer_content')
    <div style="margin-top: 60px">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="glass-card">
                    <h1 class="text-center mb-4 text-dark">Create New Task</h1>
                    <form action="{{ route('normal.store_task') }}" method="POST">
                        @csrf
                        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">

                        <div class="mb-4">
                            <label for="taskTitle" class="form-label">Task Title</label>
                            <input type="text" name="title" class="form-control" id="taskTitle"
                                placeholder="Enter task title" required>
                        </div>

                        <div class="mb-4">
                            <label for="taskStatus" class="form-label">Status</label>
                            <select name="status" class="form-select" id="taskStatus" required>
                                <option value="" disabled selected>Select task status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="taskDescription" class="form-label">Task Description</label>
                            <textarea name="description" class="form-control" id="taskDescription" rows="4"
                                placeholder="Enter task description..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn_design w-100">Add Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    .btn_design {
        background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
        padding: 10px 20px 10px 20px;
        color: white;
        border-radius: 10px;
        font-size: 18px;
    }

    body {
        background: linear-gradient(to right, #2A7B9B, #57C785, #EDDD53);
        background-size: cover;
        min-height: 100vh;
    }

    .glass-card {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 40px;
        color: white;
        transition: all 0.3s ease-in-out;
    }

    .glass-card:hover {
        box-shadow: 0 12px 45px rgba(0, 0, 0, 0.3);
    }

    .form-control,
    .form-select {
        border-radius: 10px;
        border: none;
        padding: 12px;
    }

    .form-control:focus,
    .form-select:focus {
        box-shadow: 0 0 10px rgba(87, 199, 133, 0.5);
        outline: none;
    }

    .form-label {
        font-weight: bold;
        color: #f9f9f9;
    }

    .btn-glass {
        background-color: rgba(255, 255, 255, 0.9);
        color: #2A7B9B;
        font-weight: bold;
        border-radius: 10px;
        padding: 12px;
        transition: all 0.3s ease;
    }

    .btn-glass:hover {
        background-color: #ffffff;
        color: #57C785;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-weight: bold;
        color: #fff;
    }
</style>
