@extends('layouts.app')

@section('title', 'UCC IT Web App - Welcome')

@section('extra-css')
<style>
    .home-wrapper {
        max-width: 1000px;
        margin: 30px auto;
    }

    .home-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 30px;
    }

    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .dashboard-card {
        background: #ffffff;
        border-radius: 22px;
        min-height: 220px;
        padding: 30px 25px;
        text-decoration: none;
        color: #003366;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
        border: 1px solid #e6e6e6;
    }

    .dashboard-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
        background: #fdfdfd;
    }

    .dashboard-icon {
        font-size: 9rem;
        margin-bottom: 18px;
        color: #003366;
        line-height: 1;
    }

    .dashboard-label {
        font-size: 1.25rem;
        font-weight: 700;
        text-align: center;
        color: #003366;
    }

    @media (max-width: 768px) {
        .dashboard-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .dashboard-card {
            min-height: 180px;
        }
    }
</style>
@endsection

@section('content')
    <div class="home-wrapper">
        <h1 class="home-title">Welcome!</h1>

        <div class="dashboard-grid">
            <a href="{{ url('/directory') }}" class="dashboard-card">
                <i class="bi bi-people-fill dashboard-icon"></i>
                <span class="dashboard-label">Faculty/Staff Directory</span>
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