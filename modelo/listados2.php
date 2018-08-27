 <select name="tipo" id="selectTipo">
              <option value="elige" selected>Elige un tipo</option>
  
<?php
$data = file_get_contents("data-1.json");
$propiedades = json_decode($data);


$tipos = [];
foreach ($propiedades as $key => $json) {
$tipos[] = $json->Tipo;
}
$tipos = array_unique($tipos);
foreach ($tipos as $tipo) {

echo "<option";
echo " value='";
echo $tipo;
echo "'>";
echo $tipo."</option>";
}
?>
</select>