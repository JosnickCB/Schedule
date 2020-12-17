<!DOCTYPE html>
<html lang='ES'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style/penguin.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>   
   
   <title>Inicio</title>
</head>
<body>
<?php
   if (session_status() == PHP_SESSION_ACTIVE) {
      session_destroy();
   }
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" id="primero" href="./views/primero.php">Primer Año</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="segundo" href="./views/segundo.php">Segundo Año</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="tercero" href="./views/tercero.php">Tercer Año</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="cuarto" href="./views/cuarto.php">Cuarto Año</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="quinto" href="./views/quinto.php">Quinto Año</a>
   </li>

   <li class="nav-item">
         <a class="nav-link" id="login" href="./views/login.php">Ingresar</a>
   </li>
   </ul>
</nav>
<div id="page"></div>

<!-- IMAGE PENGUIN -->
<div class="penguin">
  <div class="penguin-bottom">
    <div class="right-hand"></div>
    <div class="left-hand"></div>
    <div class="right-feet"></div>
    <div class="left-feet"></div>
  </div>
  <div class="penguin-top">
    <div class="right-cheek"></div>
    <div class="left-cheek"></div>
    <div class="belly"></div>
    <div class="right-eye">
      <div class="sparkle"></div>
    </div>
    <div class="left-eye">
      <div class="sparkle"></div>
    </div>
    <div class="blush-right"></div>
    <div class="blush-left"></div>
    <div class="beak-top"></div>
    <div class="beak-bottom"></div>
  </div>
</div>

</body>
<script>  
 
   jQuery(document).ready(function($){
      $("a").click(function(event){
         link=$(this).attr("href");
         $.ajax({
            url: link,
         })
         .done(function(html){
            $("#page").empty().append(html);
         })
         .fail(function(){
            console.log("error");
         })
         .always(function(){
            console.log("complete");
         });
         return false;
      })
      
   })

   $('#btnAdd').click(function(){ 
      var wait = 0;     
      $.ajax({
      
      beforeSend: function(){
         $('#content').text('el pepe');
      },

      url: "indexs.php",         
      success : function(data){
         setTimeout(function(){
            $('#content').html(data);
         },wait
         );
      }
      });
   });
</script>
<html>
