<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .profile-info {
            display: flex;
            justify-content: space-between;
        }

        .profile-info div {
            flex: 1;
            margin-right: 20px;
        }

        footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Profile</h1>
    </header>

    <section>
        <h2>Profile Information</h2>
        <div class="profile-info">
            <div>
                <h3>Name: John Doe</h3>
                <p>Email: admin@example.com</p>
            </div>
            <div>
                <h3>Role: Administrator</h3>
                <p>Last Login: 2023-11-30 12:30 PM</p>
            </div>
        </div>
    </section>

    <footer>
        &copy; 2023 Admin Dashboard
    </footer>
</body>

</html>