<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2KTVRp Lan View by Sergei Novitskov</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- base href start -->
<base href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/debian/" />
<!-- base href stop -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="view/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="view/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><span class="icon icon-cog"></span><a href="#">2KTVRp</a></h1>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.php" accesskey="1" title="">View Pupils</a></li>
					<li><a href="index.php/admin" accesskey="2" title="">Admin CP</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

	<?php echo $content; ?>

</body>
</html>
