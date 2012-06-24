<!DOCTYPE html>
<?php 
// Document root absolute path with trailing slash
$documentRoot = '/srv/http/';

// Web root URL with trailing slash
$urlRoot = 'http://localhost/';
$dirs = scandir($documentRoot);

// Projects that use VirtualHost
$vhosts = array (
	'Dungde'  => 'http://dungde.dev',
	'Juragan' => 'http://juragan.dev',
	);

?>
<html>
<head>
	<title>Localdex</title>
	<style type="text/css">

	* {padding: 0; margin: 0;}
	html { font-family: Verdana, Arial, sans-serif ;}
	h3{clear: left; margin: 1em 0;}
	a, a:link, a:visited{
		color: #543;
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
		border-radius: 10px;
		padding: 10px;
		margin: 5px;
		font-weight: bold;
		font-size: 14px;
		background-image: -webkit-linear-gradient(top, #fff, #eee);
		background-image: -moz-linear-gradient(top, #fff, #eee);
	}
	a.link:hover{
		background-color: #f34;
		background-color: #f34;
		background-image: -webkit-linear-gradient(top, #f43, #d32);
		background-image: -moz-linear-gradient(top, #f43, #d32);
		color: white;
	}
	a.fav{
		background-color: #ff7;
		background-image: -webkit-linear-gradient(top, #fff, #ff7);
		background-image: -moz-linear-gradient(top, #fff, #ff7);
	}
	a.fav:hover{
		background-image: -webkit-linear-gradient(top, #fd3, #d72);
		background-image: -moz-linear-gradient(top, #fd3, #d72);
	}


	</style>
</head>
<body>

<div class="container">

	<h3>&star; Favorites</h3>
	<?php foreach ($vhosts as $key => $value): ?>
		<a class="link fav" href="<?php echo $value ?>"><?php echo $key ?></a>
	<?php endforeach ?>

	<div style="clear:both"></div>
	<h3>&raquo;  Projects</h3>
	<?php foreach($dirs as $dir): ?>
		<?php if ($dir[0] != '.' AND is_dir($documentRoot.$dir)) : ?>
			<a class="link" href='<?php echo $urlRoot.$dir ?>'>

				<?php echo $dir ?>

			</a>
		<?php endif ?>
	<?php endforeach ?>
</div>

</body>
</html>
