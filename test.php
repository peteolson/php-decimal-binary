<form action="test.php" method="post" name="convert">

<p><input name="convert" type="text" size="20" >

<p><input type="submit" value="convert" ></p> 

</form>

<?php
	$dec = $_POST["convert"];
    while ($dec>=1){
		$bin = $dec % 2;
		$dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
		$arr[] = $bin;
		
    }
	echo implode(array_reverse($arr));

?>
