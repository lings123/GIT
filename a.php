<html>
	<head>
    	<?php  $a = 3; $b=2;?>    
  	</head>
	<body>
	 	Tong a va b =<?php echo $a + $b;?>
	 	<?php
		$a =5; $b=7; $c="5";
		$x1 = $a>$b;  $x2= $a==$c;  $x3 = $a === $c;
		if ($x1==true) echo "x1: true ";
		else echo "x1: false ";		//x1: false 
		if ($x2==true) echo "x2: true ";
		else echo "x2: false ";		//x2: true
		if ($x3==true) echo "x3: true ";
		else echo "x3: false ";		//x3: false
		?>
	</body>
</html>