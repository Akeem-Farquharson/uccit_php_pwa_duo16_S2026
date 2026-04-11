@extends('layouts.app')

@section('title', 'UCC Social Media')

@section('extra-css')
<style>
    .socials-wrapper {
        max-width: 950px;
        margin: 30px auto;
    }

    .socials-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 12px;
    }

    .socials-subtitle {
        color: #666666;
        font-size: 1rem;
        margin-bottom: 30px;
    }

    .socials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .social-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 28px 22px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9e9e9;
        text-align: center;
    }

    .social-icon-wrap {
        width: 72px;
        height: 72px;
        margin: 0 auto 18px;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-icon {
        font-size: 2rem;
        color: #ffffff;
        line-height: 1;
    }

    .facebook-wrap {
        background: #1877F2;
    }

    .twitter-wrap {
        background: #1DA1F2;
    }

    .instagram-wrap {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    }

    .social-card h3 {
        margin: 0 0 18px;
        color: #003366;
        font-size: 1.2rem;
        font-weight: 700;
    }

    .social-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 13px 16px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.95rem;
        color: #ffffff;
        box-sizing: border-box;
    }

    .facebook-btn {
        background: #1877F2;
    }

    .twitter-btn {
        background: #1DA1F2;
    }

    .instagram-btn {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    }

    @media (max-width: 992px) {
        .socials-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <div class="socials-wrapper">
        <h1 class="socials-title">Social Media</h1>
        <p class="socials-subtitle">Stay connected with updates, announcements, and student life across UCC’s social platforms.</p>

        <div class="socials-grid">
            <div class="social-card">
                <div class="social-icon-wrap facebook-wrap">
                    <i class="bi bi-facebook social-icon"></i>
                </div>
                <h3>Facebook</h3>
                <a href="https://www.facebook.com/uccjamaica" target="_blank" class="social-btn facebook-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Facebook
                </a>
            </div>

            <div class="social-card">
                <div class="social-icon-wrap twitter-wrap">
                    <i class="bi bi-twitter social-icon"></i>
                </div>
                <h3>Twitter</h3>
                <a href="http://www.twitter.com/uccjamaica" target="_blank" class="social-btn twitter-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Twitter
                </a>
            </div>

            <div class="social-card">
                <div class="social-icon-wrap instagram-wrap">
                    <i class="bi bi-instagram social-icon"></i>
                </div>
                <h3>Instagram</h3>
                <a href="https://www.instagram.com/uccjamaica" target="_blank" class="social-btn instagram-btn">
                    <i class="bi bi-box-arrow-up-right"></i>
                    Open Instagram
                </a>
            </div>
        </div>
    </div>
@endsection