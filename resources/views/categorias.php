<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="resources\css\estilos.css">
	<title>Categorias</title>
    <style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background: #EAEDED;
	font-family: Arial, sans-serif;
}

a {
	text-decoration: none;
}

.contenedor {
	margin: auto;
	width: 90%;
	max-width: 1200px;
}

main article {
	background: #fff;
	margin: 20px 0;
	padding: 20px;
	height: 1000px;
}

/* ------------------------- */
/* Enlaces del NAV */
/* ------------------------- */
.menu {
	background: #232F3E;
	padding: 5px 0;
	margin-bottom: 20px;
}

.menu .contenedor-botones-menu {
	/* display: flex; */
	display: none;
	justify-content: space-between;
}

.menu .contenedor-botones-menu button {
	font-size: 20px;
	color: #fff;
	padding: 10px 20px;
	border: 1px solid transparent;
	display: inline-block;
	cursor: pointer;
	background: none;
}

.menu .contenedor-botones-menu button:hover {
	border: 1px solid rgba(255,255,255, .4);
}

.menu .contenedor-botones-menu .btn-menu-cerrar {
	display: none;
}

.menu .contenedor-botones-menu .btn-menu-cerrar.activo {
	display: inline-block;
}

.menu .contenedor-enlaces-nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.menu .btn-departamentos {
	color: #fff;
	padding: 7px;
	border-radius: 3px;
	display: flex;
	align-items: flex-end;
	border: 1px solid transparent;
	font-size: 12px;
	cursor: default;
}

.menu .btn-departamentos i {
	margin-left: 20px;
	position: relative;
	bottom: 3px;
}

.menu .btn-departamentos:hover {
	border: 1px solid rgba(255,255,255, .4);
}

.menu .btn-departamentos span {
	display: block;
	font-size: 14px;
	font-weight: bold;
}

.menu .contenedor-enlaces-nav .enlaces a {
	color: #ccc;
	border: 1px solid transparent;
	padding: 7px;
	border-radius: 3px;
	font-size: 14px;
}

.menu .contenedor-enlaces-nav .enlaces a:hover {
	border: 1px solid rgba(255,255,255,.4);
}

/* ------------------------- */
/* GRID */
/* ------------------------- */
.contenedor-grid {
	position: relative;
}

.grid {
	width: 100%;
	display: none;
	position: absolute;
	top: 5px;
	z-index: 1000;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: 1fr;
	grid-template-areas: "categorias subcategorias subcategorias subcategorias";
}

.grid.activo {
	display: grid;
}

.grid::before {
	content: "";
	display: block;
	background: transparent;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #fff;
	position: absolute;
	top: -5px;
	left: 65px;
}

.grid > div {
	background: #fff;
	box-shadow: 0px 3px 6px rgba(0,0,0,.10);
}

/* ------------------------- */
/* Categorias */
/* ------------------------- */

.grid .btn-regresar {
	background: #232F3E;
	color: #fff;
	border: none;
	padding: 10px;
	border-radius: 3px;
	margin: 20px;
	font-size: 16px;
	cursor: pointer;
	display: none;
}

.grid .btn-regresar i {
	margin-right: 10px;
}

.grid .categorias {
	grid-area: categorias;
	padding-top: 10px;
	min-height: 300px;
	overflow: auto;
}

.grid .categorias .subtitulo {
	display: none;
}

.grid .categorias a {
	color: #000;
	font-size: 14px;
	display: flex;
	justify-content: space-between;
	padding: 10px 20px;
}

.grid .categorias a i {
	display: none;
}

.grid .categorias a:hover {
	color: #E47911;
	font-weight: bold;
}

.grid .categorias a:hover i {
	display: inline-block;
}

/* ------------------------- */
/* Subcategorias */
/* ------------------------- */

.grid .contenedor-subcategorias {
	grid-area: subcategorias;
}

.grid .subcategoria {
	display: none;
	grid-template-columns: 1fr 1fr 1fr;
	grid-template-rows: 1fr;
	height: 100%;
}

.grid .subcategoria.activo {
	display: grid;
}

.grid .subcategoria img {
	width: 100%;
	vertical-align: top;
	height: 100%;
	object-fit: cover;
}

.grid .enlaces-subcategoria {
	padding-top: 10px;
	height: 100%;
	max-height: 300px;
	overflow: auto;
}

.grid .enlaces-subcategoria a {
	color: #000;
	display: block;
	font-size: 14px;
	padding: 10px 20px;
}

.grid .enlaces-subcategoria a:hover {
	color: #E47911;
}

.grid .subtitulo {
	font-size: 18px;
	font-weight: normal;
	color: #E47911;
	padding: 10px 20px;
}

.grid .banner-subcategoria a {
	display: block;
	height: 100%;
}

.grid .galeria-subcategoria {
	display: flex;
	flex-wrap: wrap;
	align-content: start;
}

.grid .galeria-subcategoria a {
	width: 50%;
	height: 50%;
}

/* ------------------------- */
/* Mediaqueies */
/* ------------------------- */
@media screen and (max-width: 1000px) {
	.menu .contenedor-enlaces-nav {
		padding: 0 10px;
	}

	.menu .contenedor {
		width: 100%;
	}
}

@media screen and (max-width: 800px) {
	.menu .contenedor {
		width: 90%;
	}

	.menu .contenedor-botones-menu {
		display: flex;
	}

	.menu .contenedor-enlaces-nav {
		padding: 20px;
		flex-direction: column;
		align-items: flex-start;
		justify-content: flex-start;
		position: fixed;
		left: 0;
		background: #232F3F;
		height: 100vh;
		width: 80%;
		z-index: 2000;
		transition: .3s ease all;
		transform: translate(-100%);
	}

	.menu .contenedor-enlaces-nav.activo {
		transform: translate(0%);
	}

	.menu .btn-departamentos {
		width: 100%;
		align-items: center;
		justify-content: space-between;
		cursor: pointer;
	}

	.menu .btn-departamentos i {
		position: static;
		margin-left: 20px;
		transform: rotate(-90deg);
	}

	.menu .enlaces {
		width: 100%;
	}

	.menu .enlaces a {
		display: block;
		margin: 10px 0;
		padding: 10px;
	}

	.grid {
		display: grid;
		transition: .3s ease all;
		transform: translateX(-100%);
		z-index: 3000;
		width: 80%;
		position: fixed;
		top: 0;
		left: 0;
		height: 100vh;
		grid-template-areas: "categorias categorias categorias categorias";
	}

	.grid.activo {
		transform: translateX(0%);
	}

	.grid::before {
		display: none;
	}

	.grid .btn-regresar {
		display: inline-block;
	}

	.grid .categorias .subtitulo {
		display: block;
	}

	.grid .contenedor-subcategorias {
		position: absolute;
		top: 0;
		width: 100%;
		height: 100%;
		transition: .3s ease all;
		transform: translateX(-100%);
		overflow: auto;
	}

	.grid .contenedor-subcategorias.activo {
		transform: translateX(0%);
	}

	.grid .contenedor-subcategorias .subcategoria {
		grid-template-columns: 1fr;
	}

	.grid .contenedor-subcategorias .banner-subcategoria {
		width: 100%;
		min-height: 250px;
		max-height: 350px;
	}

	.grid .enlaces-subcategoria {
		min-height: 50vh;
		overflow: auto;
	}

	.grid .contenedor-subcategorias .galeria-subcategoria a {
		width: 25%;
		height: 100%;
	}
}
    </style>
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
	<script>
        const btnDepartamentos = document.getElementById('btn-departamentos'),
	  btnCerrarMenu = document.getElementById('btn-menu-cerrar'),
	  grid = document.getElementById('grid'),
	  contenedorEnlacesNav = document.querySelector('#menu .contenedor-enlaces-nav'),
	  contenedorSubCategorias = document.querySelector('#grid .contenedor-subcategorias'),
	  esDispositivoMovil = () => window.innerWidth <= 800;

btnDepartamentos.addEventListener('mouseover', () => {
	if(!esDispositivoMovil()){
		grid.classList.add('activo');
	}
});

grid.addEventListener('mouseleave', () => {
	if(!esDispositivoMovil()){
		grid.classList.remove('activo');
	}
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
	elemento.addEventListener('mouseenter', (e) => {
		if(!esDispositivoMovil()){
			document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
				categoria.classList.remove('activo');
				if(categoria.dataset.categoria == e.target.dataset.categoria){
					categoria.classList.add('activo');
				}
			});
		};
	});
});

// EventListeners para dispositivo movil.
document.querySelector('#btn-menu-barras').addEventListener('click', (e) => {
	e.preventDefault();
	if(contenedorEnlacesNav.classList.contains('activo')){
		contenedorEnlacesNav.classList.remove('activo');
		document.querySelector('body').style.overflow = 'visible';
	} else {
		contenedorEnlacesNav.classList.add('activo');
		document.querySelector('body').style.overflow = 'hidden';
	}
});

// Click en boton de todos los departamentos (Para version movil).
btnDepartamentos.addEventListener('click', (e) => {
	e.preventDefault();
	grid.classList.add('activo');
	btnCerrarMenu.classList.add('activo');
});

// Boton de regresar en el menu de categorias
document.querySelector('#grid .categorias .btn-regresar').addEventListener('click', (e) => {
	e.preventDefault();
	grid.classList.remove('activo');
	btnCerrarMenu.classList.remove('activo');
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
	elemento.addEventListener('click', (e) => {
		if(esDispositivoMovil()){
			contenedorSubCategorias.classList.add('activo');
			document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
				categoria.classList.remove('activo');
				if(categoria.dataset.categoria == e.target.dataset.categoria){
					categoria.classList.add('activo');
				}
			});
		}
	});
});

// Boton de regresar en el menu de categorias
document.querySelectorAll('#grid .contenedor-subcategorias .btn-regresar').forEach((boton) => {
	boton.addEventListener('click', (e) => {
		e.preventDefault();
		contenedorSubCategorias.classList.remove('activo');
	});
});

btnCerrarMenu.addEventListener('click', (e)=> {
	e.preventDefault();
	document.querySelectorAll('#menu .activo').forEach((elemento) => {
		elemento.classList.remove('activo');
	});
	document.querySelector('body').style.overflow = 'visible';
});
    </script>
</body>
</html>
