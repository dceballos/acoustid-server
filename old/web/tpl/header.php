<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr"> 
<head>
	<title><?php if ($title) { echo htmlspecialchars($title) . ' | '; } ?>Acoustid</title>
	<link type="text/css" rel="stylesheet" href="style.css" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18981078-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<div id="container">
		<div id="container-inner">

			<h1><a href="<?= $cfg_base_url ?>" title="Acoustid"><span>Acoustid</span></a></h1>

			<ul id="menu">
				<?php if ($g_user) { ?>
				<li><a href="<?= $cfg_base_url ?>api-key"><strong>Get API Key</strong></a></li>
				<li><a href="<?= $cfg_base_url ?>applications">Applications</a></li>
				<li><a href="<?= $cfg_base_url ?>logout">Log out</a></li>
				<?php } else { ?>
				<li><a href="<?= $cfg_https_base_url ?>login"><strong>Get API Key</strong></a></li>
				<?php } ?>
				<li><a href="<?= $cfg_base_url ?>stats">Statistics</a></li>
				<li><a href="http://wiki.acoustid.org/">Documentation</a></li>
				<li><a href="http://oxygene.sk/lukas/tag/acoustid/">Blog</a></li>
				<li><a href="http://groups.google.com/group/acoustid">Mailing List</a></li>
			</ul>

			<div id="content">
