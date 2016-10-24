<!doctype html>
<html>
	<head>
		<title>Coderdojo Projects</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Coderdojo projects</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">List Projects</a></li>
						<li><a href="new.php">Add Project</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<h1>View individual project</h1>

			<?php
			$id=$_GET['id'];
			$c=explode("§§§§§",file_get_contents("projects.txt"));
			for($i=0;$i<count($c);++$i){
				if($i==$id){
					$n=explode(",,",$c[$i]);
					echo '<div class="row well"><div class="col-md-12"><h3><a href="">';
					echo $n[0];
					echo '</a></h3><p>';
					if(strlen($n[1])>2) echo '<span class="label label-primary"><a href="http://www.github.com/'.$n[1].'">Github</a></span> ';
					echo '<span class="label label-info"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>'.$n[2].'</span> ';
					echo '<span class="label label-default"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>'.$n[3].'h</span> ';
					$x=explode(",",$n[5]);
					for($j=0;$j<count($x);++$j){
						echo '<span class="label label-success">'.$x[$j].'</span> ';
					}
					echo '<p><p>'.$n[6];
					echo '</p></div></div>';
				}
			}
			?>
		</div>
  </body>
</html>