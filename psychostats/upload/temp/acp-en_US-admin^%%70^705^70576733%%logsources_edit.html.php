<?php /* Smarty version 2.6.18, created on 2020-04-19 00:36:06
         compiled from acp/logsources_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/logsources_edit.html', 16, false),array('modifier', 'escape', 'acp/logsources_edit.html', 22, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<?php echo $this->_tpl_vars['message']; ?>


<div class="ps-form-container" id="ps-<?php echo $this->_tpl_vars['page']; ?>
-form">
<div class="ps-form">
<form method="post" action="<?php echo smarty_function_url(array(), $this);?>
">
<fieldset>
<legend><?php if ($this->_tpl_vars['id']): ?>Edit<?php else: ?>New<?php endif; ?> Log Source</legend>
<?php if ($this->_tpl_vars['errors']['fatal']): ?><div class="err fatal"><h4>Fatal Error</h4><p><?php echo $this->_tpl_vars['errors']['fatal']; ?>
</p></div><?php endif; ?>

<div<?php if ($this->_tpl_vars['errors']['enabled']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-enabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['enabled'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Enabled?</label>
	<label class="for" for="enabled1"><input id="enabled1" name="enabled" value="1" <?php if ($this->_tpl_vars['form']['enabled']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> Yes</label>
	<label class="for" for="enabled2"><input id="enabled2" name="enabled" value="0" <?php if (! $this->_tpl_vars['form']['enabled']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> No</label>
</div>

<div id="ls-stream" class="inline-notes">
	<h4>A note about log streams</h3>
	<p>
		Logs are not saved locally when listening to a stream.
		If no IP is entered or if the IP is 'localhost' then all
		interfaces will be monitored for the incoming UDP stream. The
		port is the listening port for the incomming UDP stream from
		remote servers.
	</p>
</div>

<div id="ls-path"<?php if ($this->_tpl_vars['errors']['path']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-path"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Log Path:</label>
	<input name="path" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field long" />
	<p class="small">
		If your logs are on this server then set the protocol to 'Local
		Logs' and enter the path above. Also note: Local paths should
		always be <b>full absolute paths</b>. Relative paths can cause
		problems and are relative to the directory where stats.pl is run
		from (not from this website).
	</p>
</div>
<div<?php if ($this->_tpl_vars['errors']['type']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-type"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Protocol:</label>
	<select id="protocol" name="type" class="field">
		<option value="file">Local Logs (on this server)</option>
<?php $_from = $this->_tpl_vars['protocols']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
		<option value="<?php echo $this->_tpl_vars['p']; ?>
"<?php if ($this->_tpl_vars['p'] == $this->_tpl_vars['form']['type']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['p']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
	</select>
</div>

<div id="ls-host"<?php if ($this->_tpl_vars['errors']['host']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-host"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Host:</label>
	<input name="host" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['host'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" />
</div>
<div id="ls-port"<?php if ($this->_tpl_vars['errors']['port']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-port"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Port:</label>
	<input name="port" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['port'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field short" />
</div>

<div id="ls-passive" <?php if ($this->_tpl_vars['errors']['passive']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-passive"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['passive'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Passive Mode?</label>
	<label class="for" for="pasv1"><input id="pasv1" name="passive" value="1" <?php if ($this->_tpl_vars['form']['passive']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> Yes</label>
	<label class="for" for="pasv2"><input id="pasv2" name="passive" value="0" <?php if (! $this->_tpl_vars['form']['passive']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> No</label>
</div>

<div id="ls-username"<?php if ($this->_tpl_vars['errors']['username']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-username"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Username:</label>
	<input name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" />
</div>

<div id="ls-blank" class="block">
<div id="ls-blank2">
	<p class="err" id="err-blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['blank'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Use Blank Password:</label>
	<input id="blank" name="blank" value="1" type="checkbox" class="checkbox"<?php if ($this->_tpl_vars['form']['blank']): ?> checked=""<?php endif; ?> />
</div>
<div class="block" id="ls-password">
<?php if ($this->_tpl_vars['id'] && $this->_tpl_vars['log']['password']): ?>
<div class="notes">
	<h4>New password?</h4>
	<p>Only type in a password if you want to change it.</p>
</div>
<?php endif; ?>
<div<?php if ($this->_tpl_vars['errors']['password']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-password"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Password:</label>
	<input name="password" type="password" class="field" autocomplete="off" />
</div>
<div<?php if ($this->_tpl_vars['errors']['password2']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-password2"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Retype Password:</label>
	<input name="password2" type="password" class="field" autocomplete="off" />
</div>
</div> </div> 
<div<?php if ($this->_tpl_vars['errors']['defaultmap']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-defaultmap"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['defaultmap'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Default Map:</label>
	<input name="defaultmap" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['defaultmap'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field" />
</div>

<div id="ls-skiplast"<?php if ($this->_tpl_vars['errors']['skiplast']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-skiplast"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['skiplast'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Skip Last Log?</label>
	<label class="for" for="skiplast1"><input id="skiplast1" name="skiplast" value="1" <?php if ($this->_tpl_vars['form']['skiplast']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> Yes</label>
	<label class="for" for="skiplast2"><input id="skiplast2" name="skiplast" value="0" <?php if (! $this->_tpl_vars['form']['skiplast']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> No</label>
</div>

<div id="ls-skiplastline"<?php if ($this->_tpl_vars['errors']['skiplastline']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-skiplastline"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['skiplastline'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Skip Last Line?</label>
	<label class="for" for="skiplastline1"><input id="skiplastline1" name="skiplastline" value="1" <?php if ($this->_tpl_vars['form']['skiplastline']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> Yes</label>
	<label class="for" for="skiplastline2"><input id="skiplastline2" name="skiplastline" value="0" <?php if (! $this->_tpl_vars['form']['skiplastline']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> No</label>
	<small>(only affects the last log in a directory)</small>
</div>

<div id="ls-recursive" class="block">
<div <?php if ($this->_tpl_vars['errors']['recursive']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-recursive"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['recursive'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Recursively Find Logs?</label>
	<label class="for" for="recursive1"><input id="recursive1" name="recursive" value="1" <?php if ($this->_tpl_vars['form']['recursive']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> Yes</label>
	<label class="for" for="recursive2"><input id="recursive2" name="recursive" value="0" <?php if (! $this->_tpl_vars['form']['recursive']): ?>checked="" <?php endif; ?>type="radio" class="radio" /> No</label>
	<p class="small">If enabled, sub-dirs in the log path will be processed up to $depth levels deep (See below).</p>
</div>
<div<?php if ($this->_tpl_vars['errors']['depth']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-depth"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Recursive Depth:</label>
	<input name="depth" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['depth'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" class="field short" />
</div>
</div> 
<div id="ls-stream-opt" class="inline-notes">
	<h4>Stream Access-List</h3>
	<p>
		Using the options input below you can enter a list of IP hosts 
		or networks that are allowed to stream to this log source. If
		nothing is entered then any stream will be allowed (which is
		not recommended). If an IP is entered with no ports then any
		port is allowed for that IP. CIDR block notation can be used
		to specify a network of hosts.
	</p>
	<p>
		1 IP and port combination per line. For example:
	</p>
	<pre>	192.168.1.1     27015
	172.16.0.0/24	27000-27050
	10.9.4.2/8      27015,27018-27020
	200.3.2.1</pre>
</div>

<div id="ls-options"<?php if ($this->_tpl_vars['errors']['options']): ?> class="err"<?php endif; ?>>
	<p class="err" id="err-options"><?php echo ((is_array($_tmp=$this->_tpl_vars['errors']['options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
	<label>Options:</label>
	<textarea class="long" name="options" rows="5" wrap="virtual"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['options'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
</div>

</fieldset>
<fieldset>
<div class="submit">
	<input name="submit" value="1" type="hidden" />
	<input name="ref" value="<?php echo $this->_tpl_vars['ref']; ?>
" type="hidden" />
	<input name="key" value="<?php echo $this->_tpl_vars['form_key']; ?>
" type="hidden" />
	<input name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" type="hidden" />
	<input class="btn save" type="submit" value="Save" />
<?php if ($this->_tpl_vars['id']): ?>
	<input id="btn-delete" class="btn delete" type="submit" value="Delete" name="del" />
<?php endif; ?>
	<input name="test" class="btn test" type="submit" value="Test" />
	<input name="cancel" class="btn cancel" type="submit" value="Cancel" />
</div>
</fieldset>
</form>
</div>
</div>


</div> 
</div> 
</div> 