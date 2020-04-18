<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:35
         compiled from default/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/index.html', 16, false),array('modifier', 'escape', 'default/index.html', 20, false),array('modifier', 'commify', 'default/index.html', 30, false),)), $this); ?>
<!--outermost page container for all content-->
<div id="ps-page-container">

<!--inner container for the content-->
<div id="ps-main">


<!--content block-->
<div id="ps-main-content" class="ps-page-index">
<form action="<?php echo smarty_function_url(array(), $this);?>
" method="get">
	<div id="ps-page-title">
		<div class="inner">
		<span>
			<input id='q-hdr' name="q" value="<?php if ($this->_tpl_vars['results']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['results']['phrase'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['q'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" class="field search"/>
			<input name="sort" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sort'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden" />
			<input name="order" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['order'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="hidden" />
		</span>
		<h1>Player Statistics</h1>
		<h2>
<?php if ($this->_tpl_vars['search']): ?>
			Search criteria "<em><?php echo ((is_array($_tmp=$this->_tpl_vars['results']['phrase'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em>" matched <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['total']['ranked'])) ? $this->_run_mod_handler('commify', true, $_tmp) : smarty_modifier_commify($_tmp)); ?>
</strong> ranked players out of <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['total']['all'])) ? $this->_run_mod_handler('commify', true, $_tmp) : smarty_modifier_commify($_tmp)); ?>
</strong> total
<?php else: ?>
			<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['total']['ranked'])) ? $this->_run_mod_handler('commify', true, $_tmp) : smarty_modifier_commify($_tmp)); ?>
</strong> players rank out of <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['total']['absolute'])) ? $this->_run_mod_handler('commify', true, $_tmp) : smarty_modifier_commify($_tmp)); ?>
</strong> total
<?php endif; ?>
		</h2>
		</div>
	</div>
</form>

	<div class="ps-table-frame no-ani">
	<div class="ps-table-header"><?php echo $this->_tpl_vars['pager']; ?>
</div>
	<div class="ps-table-inner">
	<?php echo $this->_tpl_vars['players_table']; ?>

	</div>
	<?php if ($this->_tpl_vars['total']['ranked']): ?><div class="ps-table-footer"><?php echo $this->_tpl_vars['pager']; ?>
</div><?php endif; ?>
	</div>

</div> 
</div> 
</div> 