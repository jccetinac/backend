<?php $data=file_get_contents("../data-1.json");
$propiedades=json_decode($data,true); ?>

<?php 
$filtrociudad =  $_POST['FiltroCiudad'];
$filtrominimo =  $_POST['FiltroMinimo'];
$filtromaximo =  $_POST['FiltroMaximo'];
$filtrotipo =  $_POST['FiltroTipo'];

echo $filtrociudad;
?>



<?php 
for ($i = 0; $i <= count($propiedades); $i++) {

 $dir=$propiedades[$i]["Direccion"];
 $ciudadfil=$propiedades[$i]["Ciudad"];
 $tel=$propiedades[$i]["Telefono"];
 $postal=$propiedades[$i]["Codigo_Postal"];
 $tipo=$propiedades[$i]["Tipo"];
$precio=($propiedades[$i]["Precio"]);
$preciocorrecto = str_replace(array("$", ","), "", $precio);
$precionum = floatval($preciocorrecto);




 if($filtrociudad==$ciudadfil  && $filtrotipo==$tipo   && $filtrominimo <= $precionum  && $filtromaximo >= $precionum){ ?>

<div class="item">

<?php
echo $dir."<br>";
echo $ciudad."<br>";
echo $postal."<br>";
echo $tel."<br>";
echo $tipo."<br>";
echo $precio."<br>";
echo "</div>";

}


}?> 





 






