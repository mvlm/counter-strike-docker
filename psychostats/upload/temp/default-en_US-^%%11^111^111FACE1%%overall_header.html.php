<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:35
         compiled from default/overall_header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'default/overall_header.html', 4, false),array('modifier', 'escape', 'default/overall_header.html', 4, false),array('function', 'url', 'default/overall_header.html', 33, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'PsychoStats') : smarty_modifier_default($_tmp, 'PsychoStats')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="author" content="Stormtrooper" />
	<meta name="keywords" content="PsychoStats Statistics Rankings Hitbox Counter-Strike cstrike Day of Defeat dod Team Fortress tf tf2 valve valvesoftware" />
<?php echo $this->_reg_objects['theme'][0]->meta_tags(null);?>

<?php echo $this->_reg_objects['theme'][0]->css_links(null);?>

<?php echo $this->_reg_objects['theme'][0]->js_sources(null);?>

</head>

<body class="psychostats">
<div id="ps-container">
	
<!--#OVERALL_HEADER_LOGO#-->
<div id="ps-overall-header">
	<div id="ps-overall-right">
			</div>
	<div id="ps-overall-logo"></div>
</div>
<!---->

<!--#OVERALL_HEADER_MENU#-->
<div id="ps-overall-menu">
<div id="ps-menu-right">
<?php if ($this->_tpl_vars['show_login']): ?>
<a id="ps-login-link" href="<?php echo smarty_function_url(array('_base' => 'login.php','_ref' => 1), $this);?>
" title="Quick Login Popup"><img id="ps-login-img" src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/menu-login-icon.png" alt="Login" /></a>
<?php endif; ?>
<a id="ps-search-link" href="<?php echo smarty_function_url(array('_base' => 'search.php'), $this);?>
" title="Quick Search Popup"><img id="ps-search-img" src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/menu-search-icon.png" alt="Search" /></a>
</div>
<ul>
<?php if ($this->_tpl_vars['conf']['main']['site_url']): ?>
	<li class="first"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" title="Go to <?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['main']['site_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Home</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">Players</a></li>
<?php else: ?>
	<li class="first"><a href="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">Players</a></li>
<?php endif; ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'clans.php'), $this);?>
">Clans</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'weapons.php'), $this);?>
">Weapons</a></li>
<?php if ($this->_tpl_vars['use_roles']): ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'roles.php'), $this);?>
">Roles</a></li>
<?php endif; ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'maps.php'), $this);?>
">Maps</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'awards.php'), $this);?>
">Awards</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'server.php'), $this);?>
">Servers</a></li>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'overview.php'), $this);?>
">Overview</a></li>
<?php if ($this->_tpl_vars['show_admin']): ?>
	<li><a href="<?php echo smarty_function_url(array('_base' => 'admin/index.php'), $this);?>
">Admin</a></li>
<?php endif; ?>
</ul>
</div>
<!---->

<?php if (! ps_user_logged_in ( )): ?>
<!--#LOGIN_POPUP#-->
<form method="post" action="<?php echo smarty_function_url(array('_base' => 'login.php','_ref' => 1), $this);?>
">
<div id="ps-login-popup" style="display: none">
<div id="ps-login-inner">
	<?php if ($this->_tpl_vars['show_register']): ?><div id="ps-login-reg">Newbie? -- <a href="register.php">Register!</a></div><?php endif; ?>
	<p>
	<label>Username</label>
	<input id="username" name="username" type="text" class="field" value="" />
	<input name="submit" value="1" type="hidden" />
	</p>
	<p>
	<label>Password</label>
	<input id="password" name="password" type="password" class="field" value="" />
	<button type="submit"><img src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/go.png" alt="go" /></button>
	</p>
	<div id="ps-login-options">
		<input id="ps-remember-login" name="autologin" type="checkbox" value="1" />
		<label for="ps-remember-login">Remember me!</label>
	</div>
</div>
</div>
</form>
<!---->
<?php else: ?>
<!--#LOGOUT_POPUP#-->
<div id="ps-login-popup" style="display: none">
<div id="ps-login-inner">
	<center>
	<h4>Logged in as <b><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b></h4>
	<p><big><a href="<?php echo smarty_function_url(array('_base' => 'logout.php','_ref' => 1), $this);?>
">Click here to logout!</a></big></p>
	</center>
</div>
</div>
<!---->
<!--#LOGGEDIN_POPUP#-->
<div id="ps-loggedin-popup" style="display: none">
	Welcome, <b><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br/>
	You have been logged in.<br/>
	This window will close in a few seconds.
</div>
<!---->
<?php endif; ?>

<!--#SEARCH_POPUP#-->
<form method="get" action="<?php echo smarty_function_url(array('_base' => 'index.php'), $this);?>
">
<div id="ps-search-popup" style="display: none">
<div id="ps-search-inner">
<p>
	<input id="q" name="q" type="text" class="field" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['q'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input name="sort" value="skill" type="hidden" />
	<input name="order" value="desc" type="hidden" />
	<button type="submit"><img src="<?php echo $this->_reg_objects['theme'][0]->parent_url(null);?>
/img/go.png" alt="go" /></button>
</p>
</div>
</div>
</form>
<!---->
