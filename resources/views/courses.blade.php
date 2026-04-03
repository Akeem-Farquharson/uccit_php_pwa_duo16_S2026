<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - UCC IT</title>
    <style>
        body {
            font-family: sans-serif;
            background: url("{{ asset('images/UCC.jpg') }}");
            background-size: cover;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-shadow: 1px 1px 2px black;
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 5px black;
        }

        .course-card {
            background: white;
            padding: 15px;
            margin: 0 auto 15px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            text-align: left;
            max-width: 700px;
        }

        .course-card h3 {
            margin: 0 0 8px 0;
            color: #003366;
        }

        .course-card p {
            margin: 4px 0;
            color: #666;
            font-size: 0.95rem;
        }

        .course-description {
            margin-top: 10px;
            color: #444;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <a href="/" class="back-btn">← Back to Menu</a>
    <h1>IT Courses</h1>

    @forelse ($courses as $course)
        <div class="course-card">
            <h3>{{ $course->code }} - {{ $course->name }}</h3>
            <p><strong>Credits:</strong> {{ $course->credits }}</p>
            <p><strong>Pre-requisites:</strong> {{ $course->pre_reqs ?: 'None' }}</p>
            <div class="course-description">
                {{ $course->description }}
            </div>
        </div>
    @empty
        <div class="course-card">
            <h3>No courses added yet</h3>
            <p>The courses will appear here once they are inserted into the database.</p>
        </div>
    @endforelse
</body>
</html>