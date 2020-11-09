<!DOCTYPE html>
<html lang='ES'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="styles.css"> -->
   <link rel="stylesheet" href="style/tablas.css">

   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/ajax_first.js"></script>
   <!-- <script src="script.js"></script> -->
   <title>Inicio</title>
</head>
<body>
<!-- 
<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'>Home</a></li>
   <li><a href='primero.php'>Primero</a></li>
   <li><a href='segundo.php'>Segundo</a></li>
   <li><a href='tercero.php'>Tercero</a></li>
   <li><a href='cuarto.php'>Cuarto</a></li>
   <li><a href='quinto.php'>Quinto</a></li>
   <li><a href='#'>Ingresar</a></li>
</ul>
</div> -->

<div id="demo">
   <div id="content">
      <button type="button" id="btnPrimero">Primer Año</button>
      <button type="button" id="btnSegundo">Segundo Año</button>
      <button type="button" id="btnTercero">Tercer Año</button>
      <button type="button" id="btnCuarto">Cuarto Año</button>
      <button type="button" id="btnQuinto">Quinto Año</button>

   </div>
   

<script>
   
   $('#btnPrimero').click(function(){ 

      var wait = 0;     
      $.ajax({
         
         beforeSend: function(){
            $('#content').text('loading');
         },
      
         url: "primero.php",         
         success : function(data){
            setTimeout(function(){
               $('#content').php(data);
            },wait
            );
         }
      });
   });

   $('#btnSegundo').click(function(){      
      var wait = 0;     
      $.ajax({
         
         beforeSend: function(){
            $('#content').text('loading');
         },
      
         url: "segundo.php",         
         success : function(data){
            setTimeout(function(){
               $('#content').php(data);
            },wait
            );
         }
      });
   });

   $('#btnTercero').click(function(){      
      var wait = 0;     
      $.ajax({
         
         beforeSend: function(){
            $('#content').text('loading');
         },
      
         url: "tercero.php",         
         success : function(data){
            setTimeout(function(){
               $('#content').php(data);
            },wait
            );
         }
      });
   });

   $('#btnCuarto').click(function(){      
      var wait = 0;     
      $.ajax({
         
         beforeSend: function(){
            $('#content').text('loading');
         },
      
         url: "cuarto.php",         
         success : function(data){
            setTimeout(function(){
               $('#content').php(data);
            },wait
            );
         }
      });
   });

   $('#btnQuinto').click(function(){      
      var wait = 0;     
      $.ajax({
         
         beforeSend: function(){
            $('#content').text('loading');
         },
      
         url: "quinto.php",         
         success : function(data){
            setTimeout(function(){
               $('#content').php(data);
            },wait
            );
         }
      });
   });
  
</script>

<div>
   <img src = "pabellonCS.png" width="1350" height="575">
</div>

</body>
<html>
