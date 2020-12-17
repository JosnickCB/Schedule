<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Profesor</title>
</head>
<body>
    <button onclick="location.href='../index.php'" type="button">Cerrar Sesión</button>
    <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
	    <div class="cd-schedule__timeline">
	    	<ul>
		        <li><span>07:00</span></li>
		        <li><span>07:50</span></li>
		        <li><span>08:50</span></li>
		        <li><span>09:40</span></li>
		        <li><span>10:40</span></li>
		        <li><span>11:30</span></li>
		        <li><span>12:20</span></li>
		        <li><span>13:10</span></li>
		        <li><span>14:00</span></li>
		        <li><span>14:50</span></li>
		        <li><span>15:50</span></li>
		        <li><span>16:40</span></li>
		        <li><span>17:30</span></li>
		        <li><span>18:30</span></li>
		        <li><span>19:20</span></li>
		        <li><span>20:10</span></li>
		        <li><span>21:00</span></li>
	    	</ul>
	    </div>
	    <div class="cd-schedule__events">
	    	<ul>
	    		<li class="cd-schedule__group">
	    			<div class="cd-schedule__top-info"><span>Lunes</span></div>
	    			<ul>
          			<?php
                        session_start();
    					$cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
        				port=''
        				dbname='d9als99827c31n' 
        				user='gpqwpiiktacwxs' 
        				password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
        				$con = pg_connect($cadena) or die ("Error conexion.".pg_last_error());
        				$res1 = pg_query($con,"select get_days(".$_SESSION['dni'].",'Lunes');");
        				for($i=0;$i<pg_num_rows($res1);$i++){
        					$row = pg_fetch_row($res1);
        					echo "<li class='cd-schedule__event'>";
							echo "<a data-start='".substr($row[0],1,5)."' data-end='".substr($row[0],10,5)."'  data-content='event-yoga-1' data-event='event-2' href='#'>";
							echo "<em class='cd-schedule__name'>".substr($row[0],20,-2)."</em>";
							echo "</a>";
							echo "</li>";
        				}	
					?>
	    			</ul>
	    			
	    		</li>
	    		<li class="cd-schedule__group">
	    			<div class="cd-schedule__top-info"><span>Martes</span></div>
	    			<ul>
	    			<?php
        				$res2 = pg_query($con,"select get_days(".$_SESSION['dni'].",'Martes');");
        				for($i=0;$i<pg_num_rows($res2);$i++){
        					$row = pg_fetch_row($res2);
        					echo "<li class='cd-schedule__event'>";
							echo "<a data-start='".substr($row[0],1,5)."' data-end='".substr($row[0],10,5)."'  data-content='event-yoga-1' data-event='event-2' href='#'>";
							echo "<em class='cd-schedule__name'>".substr($row[0],20,-2)."</em>";
							echo "</a>";
							echo "</li>";
        				}	
						?>
					</ul>
	    		</li>
	    		<li class="cd-schedule__group">
	    			<div class="cd-schedule__top-info"><span>Miercoles</span></div>
	    			<ul>
	    				<?php
        				$res3 = pg_query("select get_days(".$_SESSION['dni'].",'Miercoles');");
        				for($i=0;$i<pg_num_rows($res3);$i++){
        					$row = pg_fetch_row($res3);
        					echo "<li class='cd-schedule__event'>";
							echo "<a data-start='".substr($row[0],1,5)."' data-end='".substr($row[0],10,5)."'  data-content='event-yoga-1' data-event='event-2' href='#'>";
							echo "<em class='cd-schedule__name'>".substr($row[0],20,-2)."</em>";
							echo "</a>";
							echo "</li>";
        				}	
						?>
	    			</ul>
	    		</li>
	    		<li class="cd-schedule__group">
	    			<div class="cd-schedule__top-info"><span>Jueves</span></div>
	    			<ul>
	    				<?php
        				$res4 = pg_query("select get_days(".$_SESSION['dni'].",'Jueves');");
        				for($i=0;$i<pg_num_rows($res4);$i++){
        					$row = pg_fetch_row($res4);
        					echo "<li class='cd-schedule__event'>";
							echo "<a data-start='".substr($row[0],1,5)."' data-end='".substr($row[0],10,5)."'  data-content='event-yoga-1' data-event='event-2' href='#'>";
							echo "<em class='cd-schedule__name'>".substr($row[0],20,-2)."</em>";
							echo "</a>";
							echo "</li>";
        				}	
					?>
	    			</ul>
	    		</li>
	    		<li class="cd-schedule__group">
	    			<div class="cd-schedule__top-info"><span>Viernes</span></div>
	    			<ul>
	    				<?php
        				$res5 = pg_query("select get_days(".$_SESSION['dni'].",'Viernes');");
        				for($i=0;$i<pg_num_rows($res5);$i++){
        					$row = pg_fetch_row($res5);
        					echo "<li class='cd-schedule__event'>";
							echo "<a data-start='".substr($row[0],1,5)."' data-end='".substr($row[0],10,5)."'  data-content='event-yoga-1' data-event='event-2' href='#'>";
							echo "<em class='cd-schedule__name'>".substr($row[0],20,-2)."</em>";
							echo "</a>";
							echo "</li>";
        				}	
						?>
	    			</ul>
	    		</li>
	    	</ul>
	    </div>
	    <div class="cd-schedule-modal">
	      <header class="cd-schedule-modal__header">
	        <div class="cd-schedule-modal__content">
	          <span class="cd-schedule-modal__date"></span>
	          <h3 class="cd-schedule-modal__name"></h3>
	        </div>
	  
	        <div class="cd-schedule-modal__header-bg"></div>
	      </header>
	  
	      <div class="cd-schedule-modal__body">
	        <div class="cd-schedule-modal__event-info"></div>
	        <div class="cd-schedule-modal__body-bg"></div>
	      </div>
	  
	      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
	    </div>
	  
	    <div class="cd-schedule__cover-layer"></div>
 	</div> <!-- .cd-schedule -->

    <script src="../assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="../assets/js/main.js"></script>
</body>
</html>
