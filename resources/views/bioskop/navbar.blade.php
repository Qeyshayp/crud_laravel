<!DOCTYPE html>
<html>
<head>
    <title>Bioskop Kita</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            background-color: #f5f0e6;
            color: #4e342e;
        }

        header {
            background-color: #d7ccc8;
            padding: 15px 40px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 40px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h2 {
            color: #3e2723;
            margin: 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: #3e2723;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        h1 {
            color: #5d4037;
        }

        article {
            background-color: #fff8f0;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #bcaaa4;
            border-radius: 8px;
        }

        ul li {
            background-color: #f8ede3;
            padding: 10px;
            border-left: 5px solid #a1887f;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .banner {
            width: 100%;
            border-radius: 12px;
            margin-top: 20px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/bioskop">Beranda</a></li>
                <li><a href="/listfilm">List Film</a></li>
                <li><a href="/listcinema">List Cinema</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
