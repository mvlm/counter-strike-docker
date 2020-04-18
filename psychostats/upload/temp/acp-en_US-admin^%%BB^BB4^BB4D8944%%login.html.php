<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:37
         compiled from acp/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/login.html', 17, false),array('modifier', 'escape', 'acp/login.html', 26, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">


<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">


<div class="ps-form-container" id="ps-login-form">
<div class="ps-form">
<form method="post" action="<?php echo smarty_function_url(array(), $this);?>
">
<fieldset>
<legend>Administrator Login</legend>
<?php if ($this->_tpl_vars['errors']['fatal']): ?><div class="err fatal"><h4>Fatal Error</h4><p><?php echo $this->_tpl_vars['errors']['fatal']; ?>
</p></div><?php endif; ?>
<div class="inline-notes">
	<h4>No Administrator session found</h4>
	<p>You must <strong style="color: red">re-login</strong> to access the Administrator Control Panel</p>
</div>
<div<?php if ($this->_tpl_vars['errors']['username']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-username"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Username:</label>
	<input name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" />
</div>
<div<?php if ($this->_tpl_vars['errors']['password']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-password"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Password:</label>
	<input name="password" type="password" class="field" />
</div>
</fieldset>
<fieldset>
<div class="submit">
	<input name="submit" value="1" type="hidden" />
	<input name="key" value="<?php echo $this->_tpl_vars['form_key']; ?>
" type="hidden" />
	<input name="ref" value="<?php echo $this->_tpl_vars['ref']; ?>
" type="hidden" />
	<input class="btn login" type="submit" value="Login" />
	<input name="cancel" class="btn cancel" type="submit" value="Cancel" />
</div>
</fieldset>
</form>
</div>
</div>


</div> 
</div> 
</div> 