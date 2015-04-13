<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
  <title>TransLoc - Registro Histórico</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
$start = $_POST['inicio'];
$end = $_POST['fin'];
$starttime = $_POST['horaini'];
$endtime = $_POST['horafin'];
// MM/DD/AAAA
// HH:MM:SS
  //inicio
  $diaini = substr($start,3,2);
  $mesini = substr($start,0,2);
  $anoini = substr($start,6,10);
  $hourini =substr($starttime,0,2);
  $minini = substr($starttime,5,2);
  $ampmini =substr($starttime,10,12);
  
  //fin
  $diafin = substr($end,3,2);
  $mesfin = substr($end,0,2);
  $anofin = substr($end,6,10);
  $hourfin =substr($endtime,0,2);
  $minfin = substr($endtime,5,2);
  $ampmfin =substr($endtime,10,12);
  
  //AM & PM
  if ($ampmini=="PM"){
    $hourini = ($hourini + 12)%24;
  }
  if ($ampmfin=="PM"){
    $hourfin = ($hourfin + 12)%24;
  }
  //

  $comienzo = "{$anoini}-{$mesini}-{$diaini} {$hourini}:{$minini}:00";
  $termino  = "{$anofin}-{$mesfin}-{$diafin} {$hourfin}:{$minfin}:00";
  
  

  $query ="select * from gps where Fecha >= '{$comienzo}' and Fecha <= '{$termino}';";
  $query2="select Latitud from gps where Fecha >= '{$comienzo}' and Fecha <= '{$termino}';";
  $query3="select Longitud from gps where Fecha >= '{$comienzo}' and Fecha <= '{$termino}';";
  $query4="select Fecha from gps where Fecha >= '{$comienzo}' and Fecha <= '{$termino}';";

?>

<?php
$con = mysqli_connect("us-cdbr-azure-southcentral-e.cloudapp.net","bfb33240729490","cb24cf9d","tranlocmysqltestdb");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tranlocmysqltestdb");
$result1= mysqli_query($con,$query);
$numrow=mysqli_num_rows($result1);


//printf ("mon %d.\n", $numrow);



$latitud=array();
$longitud=array();
$hora=array();
$result2= mysqli_query($con,$query2);
$result3= mysqli_query($con,$query3);
$result4= mysqli_query($con,$query4);
$i=0;
while ($i<$numrow){
  $latitud[$i]= mysqli_fetch_assoc($result2);
  $longitud[$i]= mysqli_fetch_assoc($result3);
  $hora[$i]= mysqli_fetch_assoc($result4);
  //foreach ($longitud[$i] as $child) {
  //echo $child . "\n";
  //}
  $i=$i+1;
}  
?>

<script>
var lat = <?php
$i=0;
echo ("[");
while ($i<$numrow){
  foreach ($latitud[$i] as $child) {
    echo $child . ", \n";
  }   
  $i=$i+1;
}
echo("];");  
?>;
var long = <?php
$i=0;
echo ("[");
while ($i<$numrow){
  foreach ($longitud[$i] as $child) {   
    echo $child . ", \n";
  }
  $i=$i+1;
}
echo("];");  
?>;
</script>

<script>
function toggletext(cid)
{
  if ( document.getElementById(cid).style.display == "none" )
  {
    document.getElementById(cid).style.display = "block";
  }
  else
  {
    document.getElementById(cid).style.display = "none";
  };
}
//var lat = [12, 14.23, 42.12];
//var long = [-12, -14, -12];
// functions below
var map;
//Make an array with the coordinates from the db
function initialize() {
    var posicion= [];
    for (var i=0; i< lat.length; i++){
    posicion.push(new google.maps.LatLng(lat[i], long[i])); // Add the coordinates
    }

  var mapOptions = {
    zoom: 16,
     center: posicion[lat.length-1],
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
 map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div

var myLatlng = posicion[lat.length-1];

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Diseno 201510'
  });



  var linea = new google.maps.Polyline({
  path: posicion,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });



  linea.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
</div>



<div id="topbanner">
  <div class="container">
    <h1 id="sitename"><a href="index.php">TransLoc</a> <span>Geolocalización Vehicular</span></h1>
    <div id="mainnav">
      <ul>
        <li><a href="index.php">Geolocalización<span>En Tiempo Real</span></a></li>
        <li class="active"><a href="index.php">Archivo<span>Consulta histórica</span></a></li>
        <li><a href="nosotros.php">Nosotros<span>Sobre TransLoc</span></a></li>
        <li><a href="bitacora.php">Bitácora <span>Registros de avances</span></a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="pagewrap">
  <div id="wrap">

    <div id="homeheader">
      <div id="mainimg"> <img src="images/mainheader.png" width="700" height="330" alt="" /></div>
      <div id="rightboxes">
        <div class="box1">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Qué es ?</span> </a></p>
        </div>
        <div class="box2">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Cómo funciona ?</span> </a></p>
        </div>
        <div class="box3">
          <p class="rotate"> <a href="nosotros.php"><span>¿ Para quién ?</span> </a></p>
        </div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="maincontent">
      <div id="threecol">
        <h2 align="center">Consulta Histórica</h2>
        <p align="center">Resultados de la búsqueda en el periodo de tiempo especificado.</p>
        <p align="justify">&nbsp;</p>
        <div class="clear"></div>
      </div>
      <div class="clear bordered"></div>
      <div id="page">
        <h2 class="subhead"><span>Últimas entradas de la Bitácora</span></h2>
        <div class="post">
          <div class="posthead">
            <p class="date">Abril 06, 2015</p>
            <h3><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">Para esta tercera etapa fue necesario realizar la consulta con el fabricante (DCT) del modem Syrus para corregir el error del envío de la localización GPS. Ellos realizaron pruebas y ajustes remotamente, y al final con ayuda conjunta de nosotros se realizaron las últimas configuraciones y se corrigió el error que se venía presentando. <a href="bitacora.php">Leer más</a></p>
        </div>
        <div class="post">
          <div class="posthead">
            <p class="date">Marzo 16, 2015</p>
            <h3><a href="bitacora2.php">Proyecto No.2, Bitácora No.2</a></h3>
            <p class="postmeta">Por Grupo 02</p>
          </div>
          <p align="justify">Inicialmente, se hizo posible exportar la adquisición de coordenadas del Sniffer previamente implementado a una base de datos creada por medio de MySQL, evitado así el uso de un archivo de texto plano (.txt) para el almacenamiento y manejo de las coordenadas obtenidas. <a href="bitacora2.php">Leer más</a></p>
        </div>
        <div class="post">
          <div class="posthead">
            <p class="date">Marzo 09, 2015</p>
            <h3><a href="bitacora3.php">Proyecto No.2, Bitácora No.1</a></h3>
            <p class="postmeta">Por Grupo 02 </p>
          </div>
          <p align="justify">A partir de la culminación del primer proyecto, el cual consistió en adquirir las coordenadas de un modem GPS (Syrus) y enviarlas a un servidor para su correcta visualización en una cartografía mediante una página web, lo que se procede a desarrollar es una página web en donde se pueda consultar el recorrido realizado del vehículo, así mismo como la consulta de un historial de ubicación teniendo en cuenta la fecha y hora en la que el vehículo transitó. <a href="bitacora3.php">Leer más</a></p>
        </div>
      </div>

      <div id="sidebar">
        <h2>Últimas Entradas</h2>
        <ul class="posts">
          <li><a href="bitacora.php">Proyecto No.2, Bitácora No.3</a> <span>06/04/2015 </span></li>
          <li><a href="bitacora2.php">Proyecto No.2, Bitácora No.2</a> <span>16/03/2015 </span></li>
          <li><a href="bitacora3.php">Proyecto No.2, Bitácora No.1</a> <span>09/03/2015 </span></li>
          <li><a href="bitacora4.php">Proyecto No.1, Bitácora No.3</a> <span>23/02/2015 </span></li>
          <li><a href="bitacora5.php">Proyecto No.1, Bitácora No.2</a> <span>16/02/2015 </span></li>
          <li><a href="bitacora6.php">Proyecto No.1, Bitácora No.1</a> <span>09/02/2015 </span></li>
        </ul>
      </div>

      <div class="clear"></div>
    </div>
  </div>
</div>

<div id="bottom">
  <div id="btmcontent">
    <div class="col1">
      <h2>Recursos Web</h2>
      <p align="justify">Enlaces de los principales recursos utilizados para este proyecto. </p>
      <ul>
        <li><a href="https://developers.google.com/maps/" target="_blank">Google Map API</a></li>
        <li><a href="https://azure.microsoft.com/en-us/" target="_blank">Microsoft Azure</a></li>
        <li><a href="http://www.wampserver.com/en/" target="_blank">WampServer</a></li>
      </ul>
    </div>
    <div class="col2">
      <h2>Diseño Electrónico</h2>
      <p align="justify">Realizado como proyecto para la materia de Diseño Electrónico, Facultad de Ingeniería Electrónica, Universidad del Norte. </p>
      <ul>
        <li><a href="http://www.uninorte.edu.co" target="_blank">Universidad del Norte</a></li>
        <li><a href="http://www.uninorte.edu.co/web/ingenieria-electronica" target="_blank">Facultad de Ingeniería Electrónica</a></li>
      </ul>
    </div>
    <div class="col3">
      <h2>Github</h2>
      <p align="justify">Repositorio del proyecto en la plataforma de Github.</p>
      <ul>
        <li><a href="https://github.com/nestornesus/TransLocGPS" target="_blank">Repositorio de TransLoc </a></li>
      </ul>
    </div>
      


    <div class="clear"></div>
  </div>
  <div id="footer">
    <div id="copyright">
      <p class="left">Copyright &copy; 2015. Diseño Electrónico, Universidad del Norte</p>
      <p class="right">Bernal G. Néstor, Jordan N. Jhoyner &amp; Mejía S. Gustavo</p>
      <div class="clear"></div>
    </div>
  </div>
</div>

</body>

</html>