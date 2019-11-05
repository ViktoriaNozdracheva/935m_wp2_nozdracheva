<?php
	function getMenu($menu, $vertical=true)
	{	
		echo '<ul>';
			foreach ($menu as $link=>$href)
			{
				echo "<li><a href=\"$href\">", $link, '</a></li>';
			}		
		echo '</ul>';
	}
	
	
	function userSort($arr){	
		echo "<b>Исходный массив:</b><br>";
		// выводим исходный массив
		foreach ($arr as $key => $val) { 
			echo "arr[" . $key . "] = " . $val . "<br>";
		}
	    
		// сортируем массив
		$array_length = sizeof($arr);
		for($x = 0; $x < $array_length; $x++) { 
			for($y = 0; $y < $array_length; $y++) {  
				if(strcasecmp($arr[$x],$arr[$y])<0) {   
					$hold = $arr[$x];
					$arr[$x] = $arr[$y];
					$arr[$y] = $hold;
				}
			}
		 }
		echo "<br>";
		echo "<b>Массив после сортировки:</b><br>";
		// выводим отсортированный пользовательской функцией массив
		foreach ($arr as $key => $val) { 		
			echo "arr[" . $key . "] = " . $val . "<br>";
		}
	}
	
	
?>