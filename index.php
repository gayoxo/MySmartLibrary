<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>My Smart Library</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="responsive-nav.css">
	<script src="responsive-nav.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="nhpup_1.1.js"></script>
  </head>
  <body>
  
  
  <div class="wrapper">
	<div class="zona_icono">
	
	
	<?php include "cabecera.php";?>
	
     </div>
	 
	 <p class="mysmartlibraryproyect_texto_Cabecera">¿Qué es el proyecto My Smart Library?</p>
	<hr class="linea_horizontal">
	<div class="smart_library_body">
	
		<div class="grupo">
		<img class="icono_en_grupo" src="imagenes/ico1.png" alt=""><br>
		<h1 class="titulo">DEFINICIÓN</h1>
		<p class="justifiedtext_engrupo">
		MySmartLibrary es un nuevo modelo de biblioteca digital que permite la importación, gracias al desarrollo de la herramienta <a class="justifiedtext_links" href="http://www.janusdigital.es/anexos/contribucion.htm?id=37">Clavy</a>,
		de los metadatos procedentes de las grandes bibliotecas, su adaptación a las necesidades específicas de los usuarios, el enriquecimiento de los objetos con herramientas digitales y la transferencia de los objetos enriquecidos a la comunidad global.
		</p>
		</div>
		<div class="grupo">
		<img class="icono_en_grupo" src="imagenes/ico2.png" alt=""><br>
		<h1 class="titulo">PROYECTO</h1>
		<p class="justifiedtext_engrupo">
		Nuestro proyecto pretende explorar las nuevas necesidades que tienen los usuarios de 
		bibliotecas, bases de datos y repositorios digitales con el objetivo de hacer evolucionar el 
		modelo digital tradicional hacia la <a class="justifiedtext_links" href="http://www.janusdigital.es/anexos/contribucion.htm?id=37">Smartlibrary</a>  que propone la compilación, 
		integración y descarga de contenidos según las necesidades de los usuarios con el fin de 
		enriquecer los usos de nuestro pasado y desarrollar nuevos recursos útiles para la docencia 
		y la investigación.	
		</p>
		</div>
		<div class="grupo">
		<img class="icono_en_grupo" src="imagenes/ico3.png" alt=""><br>
		<h1 class="titulo">START-UP</h1>
		<p class="justifiedtext_engrupo">
		Se presentará un proyecto de start-up próximamente. Nuestro deseo es que las herramientas 
		que hemos desarrollado, gracias al apoyo de un Proyecto I+D+i, sean competitivas y útiles 
		a la sociedad con un coste menor a la media del mercado.
		</p>
		</div>
	</div>
	<hr class="linea_horizontal">
	<div class="colecciones_smart">
		
		<p class="colecciones_titulo"> COLECCIONES ACTUALES<p>
		
		<div class="colecciones_smart_list">
			<div class="colecciones_smart_list_elemnt">
				<a class="colecciones_smart_library" href="http://repositorios.fdi.ucm.es/mnemosine/" target="_blank">
				<img class="icono_coleccion" src="imagenes/logomenu.png" alt="">
				<br>Mnemosine
				<br>Biblioteca Digital de “La otra Edad de Plata”
				</a>
		</div>
		</div>
	</div> 
	<script>
	  var nav = responsiveNav(".nav-collapse");
	</script>
  </body>
</html>