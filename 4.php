<?php
$string		='X';
for ($y=0; $y < 5; $y++){
	for ($x=0; $x < 5; $x++){
		$kanan = 4;
		if($y == $x){
			echo $string." ";
		}elseif ($kanan-$x == $y){
			echo $string." ";
		}else {
			echo "= ";
		}

	}
	echo "\n";
}
?>

<?php
$string		='X';
for ($y=0; $y < 10; $y++){
	for ($x=0; $x < 10; $x++){
		$kanan = 9;
		if($y == $x){
			echo $string." ";
		}elseif ($kanan-$x == $y){
			echo $string." ";
		}else {
			echo "= ";
		}

	}
	echo "\n";
}
?>