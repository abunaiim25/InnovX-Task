@extends('layouts.normal_layout')

@section('title')
    InnovX Task - Update
@endsection


@section('customer_content')
    <div style="margin-top: 60px">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8">
                <div class="glass-card">

                    <h1 class="mb-4 text-dark">Update Task</h1>

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li class="small">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('normal.update_task', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">

                        <div class="mb-4">
                            <label for="taskTitle" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="taskTitle"
                                value="{{ old('title', $task->title) }}" required />
                        </div>

                        <div class="mb-4">
                            <label for="taskStatus" class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="" disabled>Select status</option>
                                <option value="active" {{ $task->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $task->status == 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="taskDescription" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="taskDescription" rows="4" required>{{ old('description', $task->description) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn_design w-100">Update Task</button>
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
        background: linear-gradient(to right, #57C785, #2A7B9B);
        background-size: cover;
        min-height: 100vh;
    }

    .glass-card {
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
        color: #fff;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .glass-card:hover {
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .form-label {
        font-weight: 600;
        color: #f9f9f9;
    }

    .form-control,
    .form-select {
        border-radius: 12px;
        border: none;
        padding: 12px;
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-control:focus,
    .form-select:focus {
        box-shadow: 0 0 10px rgba(42, 123, 155, 0.5);
        outline: none;
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
        text-align: center;
    }

    .alert {
        border-radius: 10px;
    }
</style>
