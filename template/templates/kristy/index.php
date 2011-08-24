<!DOCTYPE html>
<?php
JHtml::_('behavior.framework', true);

$menu = JSite::getMenu();
if ($menu && $menu->getActive())
    $menu = $menu->getActive()->alias;
else
	$menu = "";

?>
<html lang="en">
<head>
	<jdoc:include type="head" />
	
	<link rel="stylesheet" href="/templates/kristy/css/template.css" />
	<script src="/templates/kristy/scripts/scripts.js"></script>
</head>

<body class="<?php echo $menu ?>">
	<div id="wrapper">
		<div id="top">
			<jdoc:include type="modules" name="header" style="xhtml" />
			
			<div class="clear"></div>
		</div>
		
		<div id="body">
			<?php if ($this->countModules('title')): ?>
			<div id="title">
				<jdoc:include type="modules" name="title" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if ($this->countModules('sidebar')): ?>
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<div id="component" class="<?= ($this->countModules('sidebar'))? 'narrow':'' ?>">
				<jdoc:include type="component" />
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div id="footer">
			<div class="left">
				<a href="mailto:info@kristynicholson.com">info@kristynicholson.com</a>
				&nbsp;|&nbsp;
				519-337-8837
			</div>
			
			<div class="right">
				&copy; Kristy Nicholson <?php echo date('Y'); ?>. All Rights Reserved.
				&nbsp;|&nbsp;
				Site by <a href="http://ccistudios.com" target="_blank">
					CCI Studios</a>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
