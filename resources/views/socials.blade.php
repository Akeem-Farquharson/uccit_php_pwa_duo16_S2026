@extends('app')

@section('title', 'UCC Social Media')

@section('extra-css')
<style>

body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url("{{ asset('images/Students.jpg') }}") center/cover no-repeat !important;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 51, 102, 0.7);
        z-index: 1;
    }

    .social-card {
        position: relative;
        z-index: 2;
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        width: 90%;
        max-width: 400px;
        text-align: center;
    }

    h2 { color: #003366; margin-bottom: 5px; }
    p { color: #666; margin-bottom: 25px; }

    .social-btn {
        display: block;
        padding: 15px;
        margin: 10px 0;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: transform 0.2s;
    }

    .social-btn:active { transform: scale(0.95); }
    .facebook { background: #1877F2; }
    .twitter  { background: #1DA1F2; }
    .instagram { background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        color: #003366;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: bold;
    }
</style>
@endsection

@section('content')
    <div class="overlay"></div>

    <div class="social-card">
        <h2>Connect With Us</h2>
        <p>Stay updated with the latest from UCC IT Department</p>

        <a href="https://facebook.com" target="_blank" class="social-btn facebook">
            Facebook Feed
        </a>

        <a href="https://x.com" target="_blank" class="social-btn twitter">
            X (Twitter) Feed
        </a>

        <a href="https://instagram.com" target="_blank" class="social-btn instagram">
            Instagram Feed
        </a>

        <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

        <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
    </div>
@endsection
