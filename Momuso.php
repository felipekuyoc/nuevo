<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momuso</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Encabezado */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #ffffff;
        }

        .header img {
            height: 100px;
            width: auto;
        }

        .header .search-bar {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 600px;
            position: relative;
        }

        .header .search-bar input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 25px;
            padding-left: 15px;
            font-size: 14px;
        }

        .header .search-bar button {
            position: absolute;
            right: 5px;
            background-color: #000000;
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header .search-bar button img {
            width: 30px; /* Ajuste del tamaño de la imagen */
            height: 30px; /* Ajuste del tamaño de la imagen */
        }

        .header .top-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .top-bar p {
            margin: 0;
            color: white;
            font-weight: bold;
        }

        .header .top-bar img {
            width: 25px;
            height: 25px;
        }

        /* Barra de navegación */
        .nav {
            display: flex;
            justify-content: center;
            background-color: #fe0066;
            padding: 10px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
        }

        .nav a:hover {
            background-color: #cccccc;
        }

        /* Banner */
        .banner {
            background-color: #ffcc00;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
        }

        /* Productos destacados */
        .products-section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
            background-color: white;
        }

        .product {
            background-color: white;
            text-align: center;
            margin: 10px;
            padding: 10px;
            width: 150px;
        }

        .product img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .product p {
            margin: 10px 0;
            font-size: 14px;
        }

        .product button {
            background-color: #ff0066;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .product button:hover {
            background-color: #ff0066;
        }

        /* Anuncio */
        .announcement {
            background-color: #cccccc;
            color: black;
            padding: 15px;
            text-align: center;
            margin: 20px;
            border-radius: 10px;
        }

        /* Sección de categorías */
        .categories-section {
            background-color: white;
            padding: 20px;
        }

        .categories-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .category {
            display: inline-block;
            width: 150px;
            margin: 10px;
            text-align: center;
        }

        .category img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        .category p {
            margin: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Encabezado con barra de búsqueda e iconos -->
    <div class="header">
        <img src="Momuso/LO.png" alt="Momuso Logo">
        <div class="search-bar">
            <input type="text" placeholder="¿Buscas ofertas? Este mes, explora los mejores descuentos">
            <button><img src="Momuso/busqueda.png" alt="Buscar"></button>
        </div>
        <div class="top-bar">
            <p>Únete a Momuso</p>
            <img src="Momuso/Personal.png" alt="Tienda Virtual">
            <img src="Momuso/Favorito.png" alt="Favoritos">
            <img src="Momuso/Cestas.png" alt="Mi Cuenta">
            <img src="Momuso/Mensaje.png" alt="Carrito de Compras">
        </div>
    </div>

    <!-- Barra de navegación -->
    <div class="nav">
    <a href="Categoria.php">Categorías</a>
    <a href="#">Novedades</a>
    <a href="#">Ofertas</a>
    <a href="#">Ropa de mujer</a>
    <a href="#">Curvy</a>
    <a href="#">Niños</a>
    <a href="#">Ropa para hombre</a>
</div>
    <!-- Banner -->
    <section class="banner">
        <img src="Momuso/SE.png" alt="Happy Halloween">
    </section>

    <!-- Productos destacados -->
    <div class="products-section">
        <div class="product">
            <img src="Momuso/descarga (2).jpeg" alt="Recoger en Tienda">
            <p>Recoger en Tienda</p>
            <button>Ver más</button>
        </div>
        <div class="product">
            <img src="Momuso/descarga (3).jpeg" alt="Lo Nuevo">
            <p>Lo Nuevo</p>
            <button>Ver más</button>
        </div>
        <div class="product">
            <img src="Momuso/menos.jpeg" alt="Menos de $79">
            <p>Menos de $79</p>
            <button>Ver más</button>
        </div>
        <div class="product">
            <img src="Momuso/ropainvierno.jpg" alt="Colección Destacada">
            <p>Colección Ropa Invierno</p>
            <button>Ver más</button>
        </div>
        <div class="product">
            <img src="Momuso/virtual.jpg" alt="Tienda Virtual">
            <p>Tienda Virtual</p>
            <button>Ver más</button>
        </div>
        <div class="product">
            <img src="Momuso/Disfraz.jpeg" alt="Productos de Temporada">
            <p>Productos de Temporada</p>
            <button>Ver más</button>
        </div>
    </div>

    <!-- Anuncio -->
    <!-- Anuncio de apertura de lencería sensual -->
<div class="announcement">
    <h3>¡APERTURA EXCLUSIVA DE NUESTRA LÍNEA DE LENCERÍA SENSUAL!</h3>
    <p>Te invitamos a descubrir nuestra nueva colección de lencería sensual diseñada para hacerte sentir increíble.</p>
    <p>Fecha de apertura: 19 de octubre de 2024</p>
    <p>¡Te esperamos en Momuso para vivir una experiencia única de moda y sensualidad!</p>
</div>


    <!-- Sección de categorías -->
    <div class="categories-section">
        <h2>Comprar por categoría</h2>
        <div class="category">
            <img src="Momuso/Moda.jpg" alt="Categoría 1">
            <p>Moda</p>
        </div>
        <div class="category">
            <img src="Momuso/joya.jpeg" alt="Categoría 2">
            <p>Accesorios</p>
        </div>
        <div class="category">
            <img src="Momuso/juegos.jpg" alt="Categoría 3">
            <p>Juguetes</p>
        </div>
        <div class="category">
            <img src="Momuso/saludbellesa.jpeg" alt="Categoría 4">
            <p>Salud y Belleza</p>
        </div>
    </div>

</body>
</html>