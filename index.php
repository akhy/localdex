<!DOCTYPE html>
<?php 


// Document root absolute path with trailing slash
$documentRoot = '/srv/http/';

// Web root URL with trailing slash
$urlRoot = 'http://localhost/';
$dirs = scandir($documentRoot);

?>
<html>
<head>
	<title>Localdex</title>
	<style type="text/css">

	* {padding: 0; margin: 0;}
	html { font-family: Verdana, Arial, sans-serif ;}
	a, a:link, a:visited{
		color: #f43;
		text-decoration: none;
	}
	div.container{
		width: 600px;
		margin: 50px auto;
	}
	a.link{
		display: block;
		float: left;
		border: 1px solid #ddd;
		border-radius: 5px;
		padding: 10px;
		margin: 5px;
		font-weight: bold;
		font-size: 14px;
		background-image: -webkit-linear-gradient(top, #fff, #eee);
	}
	a.link:hover{
		background-color: #f34;
		background-image: -webkit-linear-gradient(top, #f43, #d32);
		color: white;
	}

	</style>
</head>
<body>

<div class="container">
	<?php foreach($dirs as $dir): ?>
		<?php if ($dir != '.' AND $dir != '..' AND is_dir($documentRoot.$dir)) : ?>
			<a class="link" href='<?php echo $urlRoot.$dir ?>'>

				<?php echo $dir ?>

			</a>
		<?php endif ?>
	<?php endforeach ?>
</div>

</body>
</html>
