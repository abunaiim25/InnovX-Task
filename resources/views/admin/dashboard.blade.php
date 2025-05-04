@extends('layouts.admin_layout')


@section('title')
    Admin
@endsection

@php

@endphp


@section('admin_content')
<div class="container mt-5">
    <h2 class="mb-4 text-dark">All Registered Users</h2>

    <table class="table table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Joined At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $index => $user)
                <tr>
                    <td class="text-dark">{{ $index + $users->firstItem() }}</td>
                    <td class="text-dark">{{ $user->name }}</td>
                    <td class="text-dark">{{ $user->email }}</td>
                    <td>
                        @if($user->role === 'admin')
                            <span class="badge bg-info text-dark">Admin</span>
                        @else
                            <span class="badge bg-secondary text-dark">Normal User</span>
                        @endif
                    </td>
                    <td>{{ optional($user->created_at)->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
</div>
@endsection