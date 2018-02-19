<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	// so we can recall db_init anywhere
	$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- boot -->
  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- boot -->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
	<link href="http://localhost:8080/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet"><!-- boot -->
</head>
<body id="target">
	<div class="container-fluid">

		<header class="jumbotron text-center" class="pull-left">
			<img
			class ="img-circle"
			id ="logo"
			src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png"
			alt="생황">
			<h1><a href="http://localhost:8080/index.php"> JavaScript </a></h1>
		</header>
	<div class="row">
		<nav class="col-md-3">
			<ol class = "nav nav-pills nav-stacked">
				<?php
				while($row = mysqli_fetch_assoc($result)){
				echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
				}
				// of not false, then it is true ^^^^^^
				// this title can be written by people which means it need some security
				?>
			</ol>
		</nav>

			<div class="col-md-9">


					<article>
						<?php
						if(empty($_GET['id']) === false){
						// $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
						// $sql = "SELECT topic.id,title,author,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
						$sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
						// echo '<p>'.$row['author'].'</p>'; author is a number
						echo '<p>'.htmlspecialchars($row['name']).'</p>';
						echo strip_tags($row['description'],'<a><h1><h2><h3><h4><h5><ul><ul><li>');
						}
						?>
					</article>

					<hr>

					<div id="control">
						<div class="btn-group" role="group" aria-label="...">
							<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
							<input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
						</div>
							<a href="http://localhost:8080/write.php"
								 class="btn btn-success btn-lg">write</a>
					</div>

			</div>


	</div>
	</div>

	 			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><!-- boot -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- boot -->
	   	<!-- Include all compiled plugins (below), or include individual files as needed --><!-- boot -->
	   	<script src="http://localhost:8080/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script><!-- boot -->
	</body>
</html>
