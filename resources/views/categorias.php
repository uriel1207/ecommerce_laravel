<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="/resources/js/estilos.css">
	<title>Categorias</title>
</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todas las <span>Categorias</span></p>
				<i class="fas fa-caret-down"></i>
			</div>

			<div class="enlaces">
				<a href="#">Cuenta</a>
				<a href="#">Promociones</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

					<a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hogar-y-cocina">Hogar<i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="salud-y-belleza">Salud y Belleza <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="electronica">Electronica <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="Deportes-y-Exterior">Deportes y Exterior <i class="fas fa-angle-right"></i></a>
				
				</div>

				<div class="contenedor-subcategorias">
					<div class="subcategoria " data-categoria="tecnologia-y-computadoras">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Tecnología y Computadoras</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadoras de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
						</div>


					</div>

					<div class="subcategoria" data-categoria="libros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Libros</h3>
							<a href="#">Top Sellers</a>
							<a href="#">Ciencia Ficcion</a>
							<a href="#">Fantasia</a>
							<a href="#">Miedo</a>
						</div>

						
					</div>

					<div class="subcategoria" data-categoria="ropa-y-accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Ropa y Accesorios</h3>
							<a href="#">Ropa</a>
							<a href="#">Zapatos</a>
							<a href="#">Accesorios</a>
							<a href="#">Relojes</a>
						</div>

						
					</div>

					<div class="subcategoria" data-categoria="hogar-y-cocina">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Hogar y Cocina</h3>
							<a href="#">Cocina</a>
							<a href="#">Electrodomesticos</a>
							<a href="#">Limpieza</a>
							<a href="#">Baño</a>
							<a href="#">Decoracion</a>
							<a href="#">Arte</a>
							<a href="#">Manualidades</a>
							<a href="#">Jardin</a>
						</div>

						
					</div>

					<div class="subcategoria" data-categoria="juegos-y-juguetes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Juegos y Juguetes</h3>
							<a href="#">Juguetes</a>
							<a href="#">Juegos de Mesa</a>
							<a href="#">Aire Libre</a>
							<a href="#">Muñecas</a>
						</div>

					</div>

					<div class="subcategoria" data-categoria="salud-y-belleza">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Salud y Belleza</h3>
							<a href="#">Cuidado de la Piel</a>
							<a href="#">Maquillaje</a>
							<a href="#">Lociones</a>
							<a href="#">Shampoo</a>
						</div>
					</div>


					<div class="subcategoria" data-categoria="electronica">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Alimentos y Bebidas</h3>
							<a href="#">Piezas y Accesorios</a>
							<a href="#">Audio y Video</a>
							<a href="#">Camaras y fotografia</a>
							<a href="#">Electronica Inteligente</a>
						</div>

					</div>

					<div class="subcategoria" data-categoria="Deportes-y-Exterior">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Deportes y Exterior</h3>
							<a href="#">Natacion</a>
							<a href="#">Zapatillas</a>
							<a href="#">Pesca</a>
							<a href="#">Ciclismo</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</nav>

	<main class="contenedor">
		<article></article>
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="/resources/js/main.js"></script>
</body>
</html>