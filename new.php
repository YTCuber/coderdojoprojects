<!doctype html>
<html>
	<head>
		<title>Coderdojo Projects: New</title>
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
						<li><a href="index.php">List Projects</a></li>
						<li class="active"><a href="#">Add Project</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			<h1>Create new project</h1>

			<form class="form-horizontal" method="post" action="new_.php">
				<div class="form-group">
					<input name="unme" type="text" class="form-control" id="exampleInputName2" placeholder="Dein Name"/>
				</div>
				<div class="form-group">
					<input name="pron" type="text" class="form-control" id="inputEmail3" placeholder="Project Name"/>
				</div>
				<div class="form-group">
					<input name="plks" type="text" class="form-control" id="inputPassword3" placeholder="Programming languages, Kommasepariert"/>
				</div>
				<div class="form-group">
					<input name="gitl" type="text" class="form-control" id="inputPassword2" placeholder="Github Link in Form von Nutzername/Repositoryname, optional"/>
				</div>
				<div class="form-group">
					<input name="abzt" type="text" class="form-control" id="inputPassword0" placeholder="Arbeitszeit in Stunden"/>
				</div>
				<div class="form-group">
					<input name="eszr" type="text" class="form-control" id="inputPassword8" placeholder="Entstehungszeitraum in absoluten Jahren"/>
				</div>
				<div class="form-group">
					<input name="cdtm" type="text" class="form-control" id="inputPassword5" placeholder="Genutzte Coderdojo Termine in Monat/Jahr"/>
				</div>
				<div class="form-group">
					<input name="desc" type="text" class="form-control" id="inputPassword1" placeholder="Beschreibung"/>
				</div>
				<div class="form-group">
					<input name="aaaa" type="submit" class="form-control" value="submit"/>
				</div>
			</form>
		</div>
  </body>
</html>