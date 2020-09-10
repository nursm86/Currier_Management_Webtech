<html>
	<head>
		<title>Problem_2</title>
	</head>
	
	<body>
		<?php
			$marks = 90;
			
			if ($marks >=90 and $marks<=100){
				echo "A+";
			}
			else if($marks >=80 and $marks<90){
				echo "A";
			}
			else if($marks >=70 and $marks<80){
				echo "B";
			}
			else if($marks >=60 and $marks<70){
				echo "C";
			}
			else if($marks>=0 and $marks<60){
				echo "F";
			}
			else{
				echo "Not valid marks!!!";
			}
		?>
	</body>
</html>