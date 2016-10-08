<?php	
	$cat1=1;
	$cat2=1;
	$cat3=1;
	$cat4=0;
	$cat5=0;
	if ($cat1==1){
		echo '
				<div class="col-xs-6">
					<a href="radio.html" class="btn btn-lg btn-block btn-outline">
						<img src="img/radio.svg" alt="" style="display:inline; padding-right: 2%">Radio
					</a>
				</div>
		';
	}else{
		echo '
				<div class="col-xs-6">
					<a href="#" class="btn btn-lg btn-block btn-outline">
						<img src="img/radio-lock.svg" alt="" style="display:inline; padding-right: 2%">Radio
					</a>
				</div>
		';
	}
	
	if ($cat2==1){
		echo '
				<div class="col-xs-6">
					<a href="historia.html" class="btn btn-lg btn-block btn-outline">
						<img src="img/historia.svg" alt="" style="display:inline; padding-right: 2%">Historia
					</a>
				</div>
			';
	else{
		echo '
			<div class="col-xs-6">
					<a href="#" class="btn btn-lg btn-block btn-outline">
						<img src="img/historia-lock.svg" alt="" style="display:inline; padding-right: 2%">Historia
					</a>
			</div>
		
		';
	}
	if ($cat3==1){
		echo '
				<div class="col-xs-6">
					<a href="tv.html" class="btn btn-lg btn-block btn-outline">
						<img src="img/tv.svg" alt="" style="display:inline; padding-right: 2%">TV
					</a>
				</div>
			';
	else{
		echo '
			<div class="col-xs-6">
					<a href="#" class="btn btn-lg btn-block btn-outline">
						<img src="img/tv-lock.svg" alt="" style="display:inline; padding-right: 2%">TV
					</a>
			</div>
		
		';
	}
	if ($cat4==1){
		echo '
			<div class="col-xs-6">
			  <a href="teorias.html" class="btn btn-lg btn-block btn-outline">
					<img src="img/teorias.svg" alt="" style="display:inline; padding-right: 2%">Teorías
			  </a>
			</div>
			';
	else{
		echo '
			<div class="col-xs-6">
			  <a href="#" class="btn btn-lg btn-block btn-outline">
					<img src="img/teorias-lock.svg" alt="" style="display:inline; padding-right: 2%">Teorías
			  </a>
			</div>
		';
	}		
?>