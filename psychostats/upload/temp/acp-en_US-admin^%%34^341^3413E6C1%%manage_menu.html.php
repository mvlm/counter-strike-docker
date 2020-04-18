<?php /* Smarty version 2.6.18, created on 2020-04-19 00:36:00
         compiled from acp/manage_menu.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/manage_menu.html', 7, false),)), $this); ?>
<!-- admin menu -->
<div class="ps-column-frame">
<div class="ps-column-header"><a href="" onclick="return false"><span>Management Menu</span></a></div>
<div class="ps-column-content">
<dl id="ps-admin-menu">
	<dt class="folder first">Manage Your Stats</dt>
		<dd class="logs<?php if ($this->_tpl_vars['page'] == 'logsources'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'logsources.php'), $this);?>
"><b>Log Sources</b></a></dd></dd>
		<dd class="award-gold<?php if ($this->_tpl_vars['page'] == 'awards'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'awards.php'), $this);?>
">Awards</a></dd></dd>
		<dd class="bonus<?php if ($this->_tpl_vars['page'] == 'plrbonuses'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'bonuses.php'), $this);?>
">Bonuses (players)</a></dd></dd>
		<dd class="lightning<?php if ($this->_tpl_vars['page'] == 'events'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'events.php'), $this);?>
">Game Events</a></dd></dd>
		<dd class="images<?php if ($this->_tpl_vars['page'] == 'icons'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'icons.php'), $this);?>
">Icons (mini avatars)</a></dd></dd>
		<dd class="server<?php if ($this->_tpl_vars['page'] == 'servers'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'servers.php'), $this);?>
">Live Servers</a></dd></dd>
		<dd class="overlay<?php if ($this->_tpl_vars['page'] == 'overlays'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'overlays.php'), $this);?>
">Overlays</a></dd></dd>
		<dd class="role<?php if ($this->_tpl_vars['page'] == 'roles'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'roles.php'), $this);?>
">Roles</a></dd></dd>
		<dd class="weapon<?php if ($this->_tpl_vars['page'] == 'weapons'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'weapons.php'), $this);?>
">Weapons</a></dd></dd>
		<dd class="page<?php if ($this->_tpl_vars['page'] == 'reset'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'reset.php'), $this);?>
"><em>Reset All Stats!</em></a></dd></dd>
	<dt class="folder first">Clan Management</dt>
		<dd class="tag<?php if ($this->_tpl_vars['page'] == 'clantags'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'clantags.php'), $this);?>
">Clantags</a></dd></dd>
	<dt class="folder first">Player Management</dt>
		<dd class="user-green<?php if ($this->_tpl_vars['page'] == 'players'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'players.php'), $this);?>
">All Players</a></dd></dd>
		<dd class="alias<?php if ($this->_tpl_vars['page'] == 'aliases'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'aliases.php'), $this);?>
">Aliases</a></dd></dd>
	<dt class="folder first">User Management</dt>
		<dd class="user-red<?php if ($this->_tpl_vars['page'] == 'users'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'users.php'), $this);?>
">All Users</a></dd></dd>
	<dt class="folder first">Error Logs</dt>
		<dd class="error<?php if ($this->_tpl_vars['page'] == 'errlogs'): ?> sel<?php endif; ?>"><a href="<?php echo smarty_function_url(array('_base' => 'errlogs.php'), $this);?>
">View Error Logs</a></dd></dd>
</dl>
</div>
</div>
