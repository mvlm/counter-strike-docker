<?php /* Smarty version 2.6.18, created on 2020-04-19 00:36:00
         compiled from acp/logsources.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'acp/logsources.html', 22, false),array('function', 'cycle', 'acp/logsources.html', 38, false),array('modifier', 'escape', 'acp/logsources.html', 43, false),array('modifier', 'datetime', 'acp/logsources.html', 45, false),)), $this); ?>
<script type="text/javascript">
delete_message = "Are you sure you want to delete the log source?";

</script>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "crumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="ps-main-column">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manage_menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!--content block-->
<div id="ps-main-content" class="ps-page-<?php echo $this->_tpl_vars['page']; ?>
">

<div class="ps-table-frame no-ani">
	<div class="ps-table-header">
		<div id="filter" class="filter">
			<form action="<?php echo smarty_function_url(array('_base' => 'logsources_edit.php'), $this);?>
" method="get">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'ajax.html', 'smarty_include_vars' => array('float' => 'left','size' => 'small-snake')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<input type="submit" value="New Log Source" class="btn" />
			</form>
		</div>
		<?php echo $this->_tpl_vars['pager']; ?>

	</div>
	<div class="ps-table-inner">
		<table id="ls-table" class='ps-table ps-logsource-table'>
		<tr class="hdr">
			<th class="active"><p><span class="asc">Order</span></p></th>
			<th><p><span class="asc">Log Source</span></p></th>
			<th><p><span class="asc">Updated</span></p></th>
			<th><p><span class="asc"><acronym title="Enabled?">?</acronym></span></p></th>
		</tr>
<?php $_from = $this->_tpl_vars['logsources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
		<tr<?php echo smarty_function_cycle(array('values' => ", class='even'"), $this);?>
>
			<td class="idx"><?php echo '<a '; ?><?php if (! $this->_tpl_vars['log']['up']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="up" href="'; ?><?php echo smarty_function_url(array('move' => 'up','id' => $this->_tpl_vars['log']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_up.png"/></a><a '; ?><?php if (! $this->_tpl_vars['log']['down']): ?><?php echo 'style="display: none"'; ?><?php endif; ?><?php echo ' class="dn" href="'; ?><?php echo smarty_function_url(array('move' => 'down','id' => $this->_tpl_vars['log']['id']), $this);?><?php echo '"><img src="'; ?><?php echo $this->_reg_objects['theme'][0]->url(null);?><?php echo '/img/icons/arrow_down.png"/></a>'; ?>
</td>
			<td class="item"><a href="<?php echo smarty_function_url(array('_base' => 'logsources_edit.php','id' => $this->_tpl_vars['log']['id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['logsource'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php if ($this->_tpl_vars['log']['lastupdate']): ?>
				<span class="sub"><b>Time:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['log']['timestamp'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>
, <b>Map:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['log']['map'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <b>File:</b> <?php echo ((is_array($_tmp=$this->_tpl_vars['log']['file'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<?php echo $this->_tpl_vars['log']['line']; ?>
)</span>
<?php endif; ?>
			</td>
			<td class="smaller"><?php if ($this->_tpl_vars['log']['lastupdate']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['lastupdate'])) ? $this->_run_mod_handler('datetime', true, $_tmp) : smarty_modifier_datetime($_tmp)); ?>
<?php else: ?>-<?php endif; ?></td>
			<td><a class="toggle" href="<?php echo smarty_function_url(array('toggle' => 1,'id' => $this->_tpl_vars['log']['id']), $this);?>
"><img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/<?php if ($this->_tpl_vars['log']['enabled']): ?>tick<?php else: ?>cross<?php endif; ?>.png"/></a></td>
		</tr>
<?php endforeach; else: ?>
		<tr><td colspan="4" class="no-data">
			No Log Sources Defined!
			<br/>
			<a href="<?php echo smarty_function_url(array('_base' => 'logsources_edit.php'), $this);?>
">Click here to add a log source</a>
		</td></tr>
<?php endif; unset($_from); ?>

		</table>
	</div>
	<div class="ps-table-footer">
		<div class="legend">
			<p>Click on the check <img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/tick.png"/> or cross <img src="<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/icons/cross.png"/> to quickly enable or disable the log source.</p>
			<p><b>Time</b> is the last timestamp read from the log source.</p>
			<p><b>Map</b> is the known map to be active from the log source.</p>
			<p><b>File</b> is the last file read from the log source (and the last line read).</p>
		</div>
	</div>
</div>


</div> </div> 
	<div class="clear"></div>
</div> 