<?php
	session_start();
	if (isset($_POST['valor'])){	
		
		if ($_SESSION['f1']==0){
			if ($_POST['valor']=='uno') {        
				 echo '
						<h4>Respuesta correcta</h4>
						<img src="img/bien.svg" style="max-height:100px;"><br>
						
					';		
			}		 
			if ($_POST['valor']=='dos') {
				   echo '
						<h4>Respuesta incorrecta</h4>
						<img src="img/mal.svg" ><br>
						
					';		
			}
			if ($_POST['valor']=='tres') {
				   echo '
						<h4>Respuesta incorrecta</h4>
						<img src="img/mal.svg"><br>
						
					';		
			}
		}
	}else{
		 echo '
					<h4>Seleccione respuesta</h4>
					<img src="img/mal.svg"><br>
					
				';		
	}
?>