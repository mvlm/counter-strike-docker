<?php /* Smarty version 2.6.18, created on 2020-04-19 00:36:00
         compiled from acp/ajax.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'acp/ajax.html', 1, false),)), $this); ?>
<div id='ajax-status' style="display: <?php echo ((is_array($_tmp=@$this->_tpl_vars['display'])) ? $this->_run_mod_handler('default', true, $_tmp, 'none') : smarty_modifier_default($_tmp, 'none')); ?>
; float: <?php echo ((is_array($_tmp=@$this->_tpl_vars['float'])) ? $this->_run_mod_handler('default', true, $_tmp, 'none') : smarty_modifier_default($_tmp, 'none')); ?>
;"><img src='<?php echo $this->_reg_objects['theme'][0]->url(null);?>
/img/ajax-<?php echo ((is_array($_tmp=@$this->_tpl_vars['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 'small') : smarty_modifier_default($_tmp, 'small')); ?>
.gif' alt='loading ...' /> <?php echo $this->_tpl_vars['text']; ?>
</div>