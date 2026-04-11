@extends('layouts.app')

@section('title', 'UCC IT Web App - Welcome')

@section('content')
    <div class="home-wrapper">
        <h1 class="home-title">Welcome!</h1>

        <div class="dashboard-grid">
            <a href="{{ url('/directory') }}" class="dashboard-card">
                <i class="bi bi-people-fill dashboard-icon"></i>
                <span class="dashboard-label">Faculty</span>
            </a>

            <a href="{{ url('/courses') }}" class="dashboard-card">
                <i class="bi bi-book-fill dashboard-icon"></i>
                <span class="dashboard-label">Courses</span>
            </a>

            <a href="{{ url('/admissions') }}" class="dashboard-card">
                <i class="bi bi-mortarboard-fill dashboard-icon"></i>
                <span class="dashboard-label">Admissions</span>
            </a>

            <a href="{{ url('/socials') }}" class="dashboard-card">
                <i class="bi bi-globe-americas dashboard-icon"></i>
                <span class="dashboard-label">Social Media</span>
            </a>
        </div>
    </div>
@endsection