<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:37
         compiled from acp/overall_header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'acp/overall_header.html', 4, false),array('function', 'url', 'acp/overall_header.html', 38, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'PsychoStats ACP') : smarty_modifier_default($_tmp, 'PsychoStats ACP')); ?>
</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="author" content="Stormtrooper" />
<?php echo $this->_reg_objects['theme'][0]->meta_tags(null);?>

<?php echo $this->_reg_objects['theme'][0]->css_links(null);?>

<?php echo $this->_reg_objects['theme'][0]->js_sources(null);?>

</head>

<body>

<!--#OVERALL_HEADER_LOGO#-->
<div id="ps-overall-header">
	<div id="ps-overall-right">
<?php if (ps_user_logged_in ( )): ?>
		[ <a href="logout.php">Logout</a> ]
<?php endif; ?>
		<?php echo $this->_reg_objects['user'][0]->username(null);?>

	</div>
	<div id="ps-overall-logo">
		<h1>PsychoStats Administrator Control Panel</h1>
	</div>
</div>
<!---->

<!--#OVERALL_HEADER_MENU#-->
<div id="ps-overall-menu">
<div id="ps-menu-right">
	<!-- ... -->
</div>
<ul>
	<li class="first"><a href="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">Home</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'conf.php'), $this);?>
">Config</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'manage.php'), $this);?>
">Manage</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'themes.php'), $this);?>
">Themes</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'plugins.php'), $this);?>
">Plugins</a></li>
</ul>
</div>
<!---->