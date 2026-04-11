@extends('layouts.app')

@section('title', 'UCC Admissions')

@section('extra-css')
<style>
    .admissions-wrapper {
        max-width: 1100px;
        margin: 30px auto;
    }

    .admissions-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #111111;
        margin-bottom: 30px;
    }

    .admissions-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .admission-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 26px 22px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e9e9e9;
        text-align: left;
    }

    .admission-icon {
        font-size: 4rem;
        color: #003366;
        margin-bottom: 12px;
    }

    .admission-card h4 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #003366;
        margin-bottom: 10px;
    }

    .admission-card p {
        font-size: 0.95rem;
        line-height: 1.5;
        color: #555555;
        margin: 0;
    }

    /* APPLY BUTTON */
    .apply-wrapper {
        margin-top: 35px;
    }

    .apply-btn {
        display: inline-block;
        background: #FFD700;
        color: #003366;
        border-radius: 14px;
        padding: 14px 28px;
        font-weight: 800;
        text-decoration: none;
        font-size: 1rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .apply-btn i {
        margin-left: 6px;
    }

    @media (max-width: 992px) {
        .admissions-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .admissions-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
    <div class="admissions-wrapper">
        <h1 class="admissions-title">Admissions</h1>

        <div class="admissions-grid">

            <div class="admission-card">
                <i class="bi bi-journal-text admission-icon"></i>
                <h4>Standard Entry</h4>
                <p>
                    The minimum standard for general admission against which all applications are assessed
                    requires passes in at least five (5) subjects at the GCE or CSEC level, including English
                    Language and Mathematics, at grades A, B, C or 1, 2, 3 respectively.
                </p>
            </div>

            <div class="admission-card">
                <i class="bi bi-pencil-square admission-icon"></i>
                <h4>4-Subject Pathway</h4>
                <p>
                    Candidates with four (4) CXC subjects may apply pending outstanding subjects or may
                    complete UCC replacement courses such as Core Mathematics, English for Academic
                    Purposes, and Fundamentals of Accounting.
                </p>
            </div>

            <div class="admission-card">
                <i class="bi bi-briefcase-fill admission-icon"></i>
                <h4>Mature Entry</h4>
                <p>
                    Applicants must be at least 25 years old with a minimum of five (5) years of work
                    experience. Academic qualifications, résumé, job letter, and three professional
                    references are required.
                </p>
            </div>

        </div>

        <div class="apply-wrapper">
            <a href="https://ucc.edu.jm/apply/undergraduate" target="_blank" class="apply-btn">
                Apply Now <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
@endsection