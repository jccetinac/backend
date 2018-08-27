<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajax base</title>
</head>
<body>
 
<input type="text" name="caja_texto"  id="valor1" />

<input type="text" name="caja_texto2"  id="valor2" />


<a  href="#" id="calcula" >calcular</a>


    <div  id="resultado" >
     </div>
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="controlador/app.js"></script>

<script>


$('#valor1, #valor2').mouseleave(function(){
   realizarProceso($('#valor1').val(),$('#valor2').val() );
});


$('#calcula').click(function(){
   realizarProceso($('#valor1').val(),$('#valor2').val() );
});
</script>

</body>
</html>