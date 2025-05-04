@extends('layouts.normal_layout')


@section('title')
    InnovX Task - Display
@endsection

@php

@endphp

<style>
    .btn_design {
        background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
        padding: 10px 20px 10px 20px;
        color: white;
        border-radius: 10px;
        font-size: 18px;
    }

    .btn_design:hover {
        color: black;
    }

    a {
        text-decoration: none !important;
    }
</style>

@section('customer_content')
    <div>
        <main class="container" style="margin-top: 80px">

            <div class="header">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4">
                    <h2 class="h2 mb-3 mb-sm-0">Task Information</h2>
                    <a class="btn_design" href="{{ route('normal.add_task') }}">+ Add Task</a>
                </div>
            </div>
            @forelse($tasks as $task)
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center mb-4">
                            <h2 class="h5 mb-3 mb-sm-0">{{ $task->title }}</h2>
                            <div>
                                <div class="status mb-2">
                                    @if ($task->status == 'active')
                                        <span class="badge bg-success">Active Task Status</span>
                                    @else
                                        <span class="badge bg-danger">Inactive Task Status</span>
                                    @endif
                                </div>

                                <div>
                                    @auth
                                        @if (Auth::user()->id === $task->user_id)
                                            <a class="btn btn-sm btn-outline-success"
                                                href="{{ route('normal.edit_task', $task->id) }}">
                                                <i class="fa-solid fa-pen"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('normal.delete_task', $task->id) }}"
                                                class="d-inline delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger delete-btn">
                                                    <i class="fa-solid fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        @endif
                                    @endauth
                                </div>

                            </div>
                        </div>
                        <dl class="row text-secondary">
                            {{-- <dt class="col-sm-3 fw-semibold">User ID</dt>
                            <dd id="user_id" class="col-sm-9 text-dark">{{ $task->user_id }}</dd> --}}

                            <dt class="col-sm-3 fw-semibold">Created By (Name)</dt>
                            <dd class="col-sm-9 text-dark">{{ $task->user->name }}</dd>

                            <dt class="col-sm-3 fw-semibold">Created By (Email)</dt>
                            <dd class="col-sm-9 text-dark">{{ $task->user->email }}</dd>

                            <dt class="col-sm-3 fw-semibold">User Role</dt>
                            <dd class="col-sm-9 text-dark">
                                {{-- {{ $task->user->role }} --}}
                                @if ($task->user && $task->user->role == 'normal')
                                    <span class="badge bg-secondary">Normal User</span>
                                @elseif ($task->user && $task->user->role == 'admin')
                                    <span class="badge bg-info">Admin User</span>
                                @else
                                    <span class="badge bg-secondary">No User</span>
                                @endif
                            </dd>

                            <dt class="col-sm-3 fw-semibold">Title</dt>
                            <dd class="col-sm-9 text-dark">{{ $task->title }}</dd>

                            <dt class="col-sm-3 fw-semibold">Description</dt>
                            <dd class="col-sm-9 text-dark">
                                {{ $task->description }}
                            </dd>
                        </dl>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No tasks found.</td>
                </tr>
            @endforelse
        </main>
    </div>


    {{-- Pagination --}}
    @if ($tasks->hasPages())
        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination shadow-sm">
                    {{-- Previous Page Link --}}
                    @if ($tasks->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $tasks->previousPageUrl() }}"
                                rel="prev">&laquo;</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($tasks->links()->elements[0] as $page => $url)
                        @if ($page == $tasks->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($tasks->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $tasks->nextPageUrl() }}"
                                rel="next">&raquo;</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                    @endif
                </ul>
            </nav>
        </div>
    @endif

@endsection


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
