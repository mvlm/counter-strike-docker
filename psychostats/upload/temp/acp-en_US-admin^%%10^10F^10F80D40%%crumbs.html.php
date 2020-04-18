<?php /* Smarty version 2.6.18, created on 2020-04-19 00:36:00
         compiled from acp/crumbs.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'acp/crumbs.html', 8, false),)), $this); ?>
<!--#BREAD_CRUMBS#-->
<?php if ($this->_tpl_vars['breadcrumbs']): ?>
<div id="ps-crumbs">
<ul>
<?php $_from = $this->_tpl_vars['breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bc'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bc']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['b']):
        $this->_foreach['bc']['iteration']++;
?>
	<li<?php if (($this->_foreach['bc']['iteration'] == $this->_foreach['bc']['total'])): ?> class="last"<?php endif; ?>><?php echo ''; ?><?php if (is_array ( $this->_tpl_vars['b'] )): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['b']['link']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['b']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['b'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>
<!---->