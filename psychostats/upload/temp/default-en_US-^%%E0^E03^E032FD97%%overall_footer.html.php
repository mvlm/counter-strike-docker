<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:35
         compiled from default/overall_footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/overall_footer.html', 5, false),array('modifier', 'escape', 'default/overall_footer.html', 8, false),)), $this); ?>
<div id="ps-overall-footer">
<div id="ps-footer-middle">
<?php if ($this->_tpl_vars['language_list']): ?>
	<div class="language">
		<form action="<?php echo smarty_function_url(array('_base' => 'index.php','_ref' => 1), $this);?>
" method="post">
		<select name="language" class="language" title="Select a Language">
			<?php $_from = $this->_tpl_vars['language_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
			<option<?php if ($this->_tpl_vars['lang'] == $this->_tpl_vars['language']): ?> selected='selected' class='sel'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		</form>
	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['theme_list'] && count ( $this->_tpl_vars['theme_list'] ) > 1): ?>
	<div class="theme">
		[ <a href="<?php echo smarty_function_url(array('_base' => 'themes.php'), $this);?>
">Change Theme</a> ]
	</div>
<?php endif; ?>
	<div class="poweredby">
		Powered by PsychoStats <?php echo $this->_reg_objects['ps'][0]->version(null);?>
		<?php if ($this->_tpl_vars['show_benchmark']): ?>
		-- Page loaded in <!--PAGE_BENCHMARK--> seconds with <?php echo $this->_reg_objects['db'][0]->totalqueries;?>
 SQL queries
		<?php endif; ?>
		<?php if (ps_user_is_admin ( )): ?>
		<br/><strong>[ <a href="<?php echo smarty_function_url(array('_base' => 'admin/index.php'), $this);?>
">Login to admin control panel</a> ]</strong>
		<?php endif; ?>
		<br/><a href="http://validator.w3.org/check?uri=referer">W3C XHTML 1.0</a>
	</div>
</div>
</div>

</div></body>
</html>