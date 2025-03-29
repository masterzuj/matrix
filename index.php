<style>
	body{
		background-color:black;
	}
</style>
<br/><br/><br/>
<center>
<form action="index.php?s=matrix" method="GET">
	<input type="text" name="matrix" style="color: green;" autofocus>
	<input type="hidden" name="s" value="matrix"/>
	<input type="submit" style="color: green;">
</form>
<div style="color: green; font-size: 20;">
	
	<?php echo $_GET["matrix"]; ?>
</div>	
<br/>
<div  style="writing-mode: vertical-lr; text-orientation: upright; color: green; height: 80%;">
	<b>
		<?php
		if($_GET["matrix"] != ""){
			$data = $_GET["matrix"];

			foreach (hash_algos() as $v) {
					$r = hash($v, $data, false);
					echo($r."</br>");
			}
		}
		?>
	</b>
</div>
</center>