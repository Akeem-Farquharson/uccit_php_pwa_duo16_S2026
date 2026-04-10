@extends('layouts.app')

@section('title', 'UCC Admissions')

@section('extra-css')
   <style>
        /* Fixed: Added 'body' selector back in */
        body {
            background:
                linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("{{ asset('images/UCC.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            font-family: Arial, sans-serif;
        }

        .main-wrapper {
            width: 100%;
            max-width: 550px;
            padding: 15px;
        }

        .nav-header {
            text-align: center;
            padding-top: 20px;
        }

        .back-btn {
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
            display: inline-block;
        }

        .header-section {
            padding: 20px 0 20px;
            text-align: center;
        }

        .header-section h1 {
            font-size: 2rem;
            font-weight: 900;
            color: #ffffff;
            letter-spacing: -1px;
            margin-bottom: 0;
            text-transform: uppercase;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.8);
        }

        .sub-header {
            color: #ffffff;
            font-weight: 600;
            font-size: 1.1rem;
            font-style: italic;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
        }

        .info-square {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 15px;
            padding: 20px 25px;
            margin: 0 auto 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 1);
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .emoji-header {
            font-size: 1.8rem;
            margin-bottom: 5px;
            display: block;
        }

        .info-square h4 {
            font-size: 1.2rem;
            font-weight: 800;
            color: #003366;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .info-square p {
            font-size: 0.95rem;
            line-height: 1.4;
            color: #000000;
            margin-bottom: 0;
        }

        .button-wrap {
            padding-bottom: 30px;
        }

        .apply-btn {
            background: #FFD700;
            color: #003366;
            border-radius: 12px;
            padding: 15px;
            font-weight: 900;
            text-transform: uppercase;
            border: none;
            width: 100%;
            font-size: 1.2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 10px;
            box-sizing: border-box;
        }

        .apply-btn:hover {
            opacity: 0.95;
        }
    </style>
@endsection

@section('content')
    <div class="main-wrapper">
        <div class="nav-header">
            <a href="{{ url('/') }}" class="back-btn">
                ← Back to Home
            </a>
        </div>

        <div class="header-section">
            <h1>ADMISSION</h1>
            <p class="sub-header">Let your UCC journey begin!</p>
        </div>

        <div class="info-square">
            <span class="emoji-header">📖</span>
            <h4>Standard Entry</h4>
            <p>Applicants must possess a minimum of five (5) subjects at the GCE or CSEC level, including English Language and Mathematics, at grades A, B, C or 1, 2, 3 respectively.</p>
        </div>

        <div class="info-square">
            <span class="emoji-header">✏️</span>
            <h4>4-Subject Pathway</h4>
            <p>Candidates with four (4) CXC subjects may apply pending outstanding subjects or may opt to complete UCC replacement courses: Core Mathematics, English for Academic Purposes, and Fundamentals of Accounting.</p>
        </div>

        <div class="info-square">
            <span class="emoji-header">💼</span>
            <h4>Mature Option</h4>
            <p>Applicants must be at least 25 years old with a minimum of five (5) years of work experience. Academic qualifications, résumé, job letter, and three professional references are required.</p>
        </div>

        <div class="button-wrap">
            <a href="https://ucc.edu.jm" target="_blank" class="apply-btn">
                APPLY NOW ➔
            </a>
        </div>
    </div>
@endsection
