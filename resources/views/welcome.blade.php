<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC IT Web App</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; }
        .container { text-align: center; background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 90%; max-width: 400px; }
        h1 { color: #003366; margin-bottom: 1.5rem; }
        .menu-item { display: block; width: 100%; padding: 12px; margin: 10px 0; background-color: #003366; color: white; text-decoration: none; border-radius: 8px; transition: background 0.3s; box-sizing: border-box; }
        .menu-item:hover { background-color: #0055aa; }
        .fab { position: fixed; bottom: 20px; right: 20px; background: #cc0000; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 24px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
    </style>
</head>
<body>

   <div class="container">
    <h1>UCC IT Department</h1>

    <a href="/directory" class="menu-item">Faculty/Staff Directory</a>
    <a href="/courses" class="menu-item">Courses</a>
    <a href="/under-construction" class="menu-item">Admissions</a>
    <a href="/socials" class="menu-item">Social Media</a>
</div>


    <a href="mailto:hod@ucc.edu.jm" class="fab" title="Email HOD">📧</a>

</body>
</html>
