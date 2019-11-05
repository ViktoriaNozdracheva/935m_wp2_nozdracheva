<?php
	date_default_timezone_set('Asia/Muscat');
	include "lib.inc.php";
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<title>Учебный сайт "ВУЗ"</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<?php include "blocks/top.inc.php" ?>	    
	<?php include "blocks/menu.inc.php" ?>
	<div>
		<div class="index-text-1">
			<p><b>Университет</b> — высшее учебное заведение, где готовятся специалисты по фундаментальным и многим прикладным наукам. Как правило, осуществляет и научно-исследовательскую работу. Многие современные университеты действуют как учебно-научно-практические комплексы. Университеты объединяют в своём составе несколько факультетов, на которых представлена совокупность различных дисциплин, составляющих основы научного знания.</p> 
			<p><b>Высшее образование</b> - это своеобразный признак интеллигентности и высокого уровня культуры личности.</p>
		</div>
	</div>
	<div>
        <img class="index-glavnya-img" src="images/pic1.png" alt="фото университета">
		<video src="images/видео.mp4" width="400" height="150"  preload="auto" controls="controls"></video>
	</div>
	<?php include "blocks/bottom.inc.php" ?>
</body>

</html>