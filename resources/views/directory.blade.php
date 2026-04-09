@extends('app')

@section('title', 'Faculty Directory - UCC IT')

@section('extra-css')
<style>
    body {
        text-align: center;
        padding: 20px;
    }

    .staff-card {
        background: white;
        padding: 15px;
        margin: 0 auto 15px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        text-align: left;
        max-width: 500px;
    }

    .staff-photo { width: 80px; height: 80px; border-radius: 50%; background: #ddd; margin-right: 15px; overflow: hidden; flex-shrink: 0; }
    .staff-photo img { width: 100%; height: 100%; object-fit: cover; }

    .staff-info h3 { margin: 0; color: #003366; }
    .staff-info p { margin: 2px 0; color: #666; font-size: 0.9rem; }

    .contact-links a { display: inline-block; margin-top: 8px; margin-right: 15px; color: #007bff; text-decoration: none; font-weight: bold; font-size: 0.9rem; }

    .back-btn { display: inline-block; margin-bottom: 20px; color: white; text-decoration: none; font-weight: bold; text-shadow: 1px 1px 2px black; }

    h1 { color: white; text-shadow: 2px 2px 5px black; }
</style>
@endsection

@section('content')
    <a href="{{ url('/') }}" class="back-btn">← Back to Menu</a>
    <h1>IT Faculty & Staff</h1>

    <div class="staff-card">
        <div class="staff-photo"><img src="{{ asset('images/Otis.jpg') }}" alt="Otis Osbourne"></div>
        <div class="staff-info">
            <h3>Otis Osbourne</h3>
            <p>Head of Department (HOD)</p>
            <div class="contact-links">
                <a href="tel:8769063000">📞 Call</a>
                <a href="mailto:oosbourne@ucc.edu.jm">📧 Email</a>
            </div>
        </div>
    </div>

    <div class="staff-card">
        <div class="staff-photo"><img src="https://placeholder.com" alt="Coordinator"></div>
        <div class="staff-info">
            <h3>Sherida Levy</h3>
            <p>Program Coordinator</p>
            <div class="contact-links">
                <a href="tel:8762361895,4020">📞 Call (Ext. 4020)</a>
                <a href="mailto:itprogcoordinator@ucc.edu.jm">📧 Email</a>
            </div>
        </div>
    </div>

    <div class="staff-card">
        <div class="staff-photo"><img src="{{ asset('images/Craig.jpg') }}" alt="Officer"></div>
        <div class="staff-info">
            <h3>Craig Wilmot</h3>
            <p>Program Officer</p>
            <div class="contact-links">
                <a href="tel:8762361895,3937">📞 Call (Ext. 3937)</a>
                <a href="mailto:itprogofficer4@ucc.edu.jm">📧 Email</a>
            </div>
        </div>
    </div>

    <div class="staff-card">
        <div class="staff-photo"><img src="{{ asset('images/Support.jpg') }}" alt="Support"></div>
        <div class="staff-info">
            <h3>IS&T Officer</h3>
            <p>IT Systems Administrator</p>
            <div class="contact-links">
                <a href="mailto:isthelpdesk@ucc.edu.jm">📧 Email 1</a>
                <a href="mailto:smssupport@ucc.edu.jm">📧 Email 2</a>
            </div>
        </div>
    </div>
@endsection
