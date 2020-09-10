<html>
	<head></head>
	
	<body>
		<?php
			$name = str_split($_POST["name"]);
			$flag = true;
			if($_POST["name"] == ""){
				echo "Name field cannot be empty";
				$flag = false;
			}
			else if(($name[0] <'a' or $name[0] >'z') and ($name[0] <'A' or $name[0] >'Z')){
				echo "Name Can not start with $name[0]";
				$flag = false;
			}
			else if(str_word_count($_POST["name"])<2){
				echo "Name Can not be less than 2 word";
				$flag = false;
			}
			else{
				for($i = 0;$i<count($name);$i++){
					if(($name[$i] <'a' or $name[$i] >'z') and ($name[$i] <'A' or $name[$i] >'Z') and $name[$i] != "." and $name[$i] != "-" and $name[$i] != " "){
						echo "Name cannot Contain $name[$i]";
						$flag = false;
						break;
					}
				}
			}
			
			if($flag){
				echo "Name Submitted Successfully";
			}
			
		?>
	</body>
</html>