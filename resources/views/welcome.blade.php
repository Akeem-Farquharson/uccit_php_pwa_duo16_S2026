@extends('app')

@section('title', 'UCC IT Web App - Welcome')

@section('extra-css')
<style>
    /* Specific styles for the menu layout */
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .container {
        text-align: center;
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        width: 90%;
        max-width: 400px;
    }

    h1 {
        color: #003366;
        margin-bottom: 1.5rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .menu-item {
        display: block;
        width: 100%;
        padding: 15px;
        margin: 12px 0;
        background-color: #003366;
        color: white;
        text-decoration: none;
        border-radius: 12px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }

    .menu-item:hover {
        background-color: #FFD700;
        color: #003366;
        transform: translateY(-2px);
    }
</style>
@endsection

@section('content')
   <div class="container">
        <h1>UCC IT Department</h1>

        <a href="{{ url('/directory') }}" class="menu-item">Faculty/Staff Directory</a>
        <a href="{{ url('/courses') }}" class="menu-item">Courses</a>
        <a href="{{ url('/admissions') }}" class="menu-item">Admissions</a>
        <a href="{{ url('/socials') }}" class="menu-item">Social Media</a>
    </div>
@endsection

