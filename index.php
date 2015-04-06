<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>TransLoc - Geolocalización Vehicular</title>


</head>
<body>

<div id="topbanner">
  <div class="container">
    <h1 id="sitename"><a href="index.php">TransLoc</a> <span>Geolocalización Vehicular</span></h1>
    <div id="mainnav">
      <ul>
        <li class="active"><a href="index.php">Geolocalización<span>En Tiempo Real</span></a></li>
        <li><a href="historico.php">Histórico<span>Consulta histórica</span></a></li>
        <li><a href="nosotros.php">Nosotros<span>Quiénes somos?</span></a></li>
        <li><a href="bitacora.php">Bitácora <span>Nuestro proyecto en el tiempo</span></a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="pagewrap">
  <div id="wrap">
    <div id="homeheader">
    
   	   <?php
    	echo "Latitud: ", $latitud[count($latitud)-1];
  	 	 echo "  ";
 	  	 echo "Longitud: ", $longitud[count($longitud)-1];
   		 ?>
    	<div id="map"></div>
    	<p id="error"></p>


      <div id="rightboxes">
        <div class="box1">
          <p class="rotate"> <a href="#"><span>Qué es?</span> </a></p>
        </div>
        <div class="box2">
          <p class="rotate"> <a href="#"><span>Cómo funciona?</span> </a></p>
        </div>
        <div class="box3">
          <p class="rotate"> <a href="#"><span>A quién está dividido?</span> </a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    
    <div id="maincontent">
      <div id="threecol">
        <div class="col1">
          <h2>Sistema de Telemetría</h2>
          <p>Es.</p>
        </div>
        <div class="col2">
          <h2>Geolocalización</h2>
          <p>Es.</p>
        </div>
        <div class="col3">
          <h2>Por qué utilizarlo?</h2>
          <p>Para algo.</p>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear bordered"></div>
      <div id="page">
        
        <h2 class="subhead"><span>Últimas entradas de la Bitácora</span></h2>
        <div class="post">
          <div class="posthead">
            <p class="date">Abril 06, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a></h3>
            <p class="postmeta">By Grupo02</p>
          </div>
          <p>Proyect Bitacora texto... <a href="bitacora.php">Leer más</a></p>
        </div>
        <div class="post">
          <div class="posthead">
            <p class="date">Marzo 16, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.2</a></h3>
            <p class="postmeta">By Grupo02></p>
          </div>
          <p>Inicialmente, se hizo posible exportar la adquisición de coordenadas del Sniffer previamente implementado a una base de datos creada por medio de MySQL, evitado así el uso de un archivo de texto plano (.txt) para el almacenamiento y manejo de las coordenadas obtenidas...<a href="bitacora.php">Leer más</a></p>
        </div>
        <div class="post">
          <div class="posthead">
            <p class="date">Marzo 09, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.1</a></h3>
            <p class="postmeta">By Grupo02</p>
          </div>
          <p>A partir de la culminación del primer proyecto, el cual consistió en adquirir las coordenadas de un modem GPS (Syrus) y enviarlas a un servidor para su correcta visualización en una cartografía mediante una página web, lo que se procede a desarrollar es una página web en donde se pueda consultar el recorrido realizado del vehículo, así mismo como la consulta de un historial de ubicación teniendo en cuenta la fecha y hora en la que el vehículo transitó... <a href="bitacora.php">Leer más</a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div id="bottom">
  <div id="btmcontent">
    <div class="col1">
      <h2>Geolocalzación</h2>
      <p>Google API.</p>
      <ul>
        <li><a href="#">velit vehicula</a></li>
      </ul>
    </div>
    <div class="col2">
      <h2>Github</h2>
      <p>Repositorio en Github.</p>
      <ul>
        <li><a href="#">velit vehicula</a></li>
      </ul>
    </div>
    <div class="col3">
      <h2>Diseño Electrónico</h2>
      <p>Sistema de Telemetría.</p>
    </div>
    <div class="clear"></div>
  </div>
  <div id="footer">
    <div id="copyright">
      <p class="left">Copyright &copy; 2015, Diseño Electrónico, Universidad del Norte</p>
      <p class="right"> Bernal G. Néstor, Jordan N. Jhoyner &amp; Mejía S. Gustavo</a></p>
      <div class="clear"></div>
    </div>
  </div>
</div>

</body>
</html>
