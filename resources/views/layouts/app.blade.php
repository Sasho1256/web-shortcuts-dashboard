<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2e5f8a;
            color: white;

            font-size: x-large;

            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: .5rem;
        }

        main {
            margin-top: 1rem;
            margin-bottom: 1rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        footer {
            background-color: #2e5f8a;
            color: white;

            text-align: right;
            font-size: x-small;

            position: sticky;
            padding-top: .2rem;
            padding-bottom: .2rem;
            padding-right: .5rem;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 10px;
            max-width: 800px;
            margin: auto;
        }

        @media (max-width: 600px) {
            .dashboard {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }

        @media (max-width: 400px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
        }

        .tile {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150px;
            border-radius: 8px;
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: black;
        }

        .tile-empty {
            background-color: #ddd;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
        }

        .tile-container {
            position: relative;
        }

        .button-container {
            position: absolute;
            top: 5px;
            right: 5px;
            z-index: 10;
        }

        .button-container button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            margin-left: 5px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>

    <header>
        <div>Shkolo Dashboard</div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>© 2024 Shkolo</div>
    </footer>

</body>

</html>
