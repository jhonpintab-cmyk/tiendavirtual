
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .bienvenida {
            background-color: white;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
        }

        .boton {
            display: inline-block;
            background-color: #222;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tienda Virtual</h1>
        <p>Tu tienda en línea</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>Bienvenido a nuestra tienda</h2>

            <p>
                Encuentra los mejores productos
                en un solo lugar.
            </p>

            <a href="/productos" class="boton">
                Ver productos
            </a>
        </section>
    </main>

    <footer>
        <p>© 2026 Tienda Virtual</p>
    </footer>
</body>

</html>
