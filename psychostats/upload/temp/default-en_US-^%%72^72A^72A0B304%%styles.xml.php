<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:35
         compiled from default/styles.xml */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'default/styles.xml', 25, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version='1.0' encoding='utf-8' <?php echo '?>'; ?>

<!--
	Language strings can be used in this file using string to translate.
	That is different then HTML templates that use <#...#>. This is done to
	prevent strict XML errors when editing the file in a GUI.
-->
<styles>
	<!--
		Define overall theme styles.
		Defining styles and scripts below allows each file to be
		combined and compressed into a single request automatically.
		And this allows a child theme to override a parent theme styles.
		'src' and 'href' locations are relative to the theme and do
		not require a leading slash.
	-->
	<theme>
		<!-- Define overall stylesheets for all pages -->
		<css href="css/overall.css" />
		<css href="css/content.css" />
		<!-- Define overall javascripts for all pages -->
		<script>
						var themeurl = '<?php echo ((is_array($_tmp=$this->_reg_objects['theme'][0]->parent_url(null))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript'));?>
';
			var iconsurl = '<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['icons_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
		</script>
		<?php if ($this->_tpl_vars['conf']['theme']['map']['google_key']): ?>
		<script>
			var mapconf = {
				enable_custom_icons:	parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['enable_custom_icons'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				ctrl_maptype:		parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['ctrl_maptype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				ctrl_overview:		parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['ctrl_overview'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				mousewheel:		parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['mousewheel'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				smoothzoom:		parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['smoothzoom'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				zoom:			parseInt('<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['zoom'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'),
				center: 		'<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['center'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
				ctrl_map: 		'<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['ctrl_map'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
				maptype:		'<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['maptype'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
				standard_icon: 		'<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['standard_icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
',
				standard_icon_shadow:	'<?php echo ((is_array($_tmp=$this->_tpl_vars['conf']['theme']['map']['standard_icon_shadow'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'
			};
		</script>
		<?php endif; ?>
		<script src="js/jquery.js" />
		<script src="js/overall.js" />
	</theme>

	<!-- Define styles for flash output within the theme -->
	<flash bgcolor="#C4C4C4" bg_inner1="#eeeeff" bg_inner2="#ced4e1" inner_angle="90">
		<!-- country breakdown pie chart -->
		<pie bgcolor="">
			<title style="font-size: 16px">Country Breakdown</title>
			<labels style="display: none" />
			<tooltip><![CDATA[#x_label#<br>#val#%]]></tooltip>
			<slices border="#505050">
				<slice color="#0033FF" />
				<slice color="#00B3FF" />
				<slice color="#00FFCC" />
				<slice color="#00FF4D" />
				<slice color="#CC00FF" />
				<slice color="#7A95FF" />
				<slice color="#FFD83D" />
				<slice color="#B3FF00" />
				<slice color="#FF0033" />
				<slice color="#FFCC00" />
			</slices>
		</pie>

		<!-- last 24 hours line chart -->
		<last24 bgcolor="" bg_inner1="" bg_inner2="" inner_angle="">
			<title style="font-size: 16px">Last 24 Hours</title>
			<tooltip><![CDATA[#key#<br>#val# (#x_label#)]]></tooltip>
			<lines key_size="9">
				<line width="3" key="Average Kills" color="#9999ee" />
				<line width="2" dot_size="5" key="Kills" color="#5555ff" />
				<line width="1" key="Connections" color="#000000" />
			</lines>
		</last24>

		<!-- last 31 days connection bar chart -->
		<conn bgcolor="" bg_inner1="" bg_inner2="" inner_angle="">
			<title style="font-size: 16px">Daily Connections</title>
			<tooltip><![CDATA[#x_label#<br>#key#: #val# (Avg: %d)]]></tooltip>
			<line width="3" key="Average Connections!" size="9" color="#9999ee" />
			<bar3d alpha="75" key="Connections" size="9" color1="#5555ff" color2="#3333DD" />
		</conn>

		<!-- quick player skill history line chart -->
		<plrskill bgcolor="" bg_inner1="" bg_inner2="" inner_angle="">
			<title style="font-size: 12px"></title>
			<lines key_size="9">
				<line width="2" key="Average" color="#9999ee" />
				<line width="3" key="Skill" color="#5555ff" />
			</lines>
		</plrskill>
	</flash>
	<image>
		<!-- Common styles for all images -->
		<common>
			<margin top="0" right="0" bottom="0" left="0" />
			<footer show="1" color="#999999" font="FF_FONT0">
				<left>PsychoStats v%s</left>
				<right>M d @ H:i:s</right>
			</footer>
		</common>
		<!-- Player sessions ghantt chart image -->
		<session interval="2" font="FF_FONT0" showfooter="1">
			<margin top="5" right="5" bottom="" left="6" />
			<title></title>
			<frame margin="#EEEEEE" color="gray" width="0" />
			<header color="black" bgcolor="#E4DCCE" hourstyle="HOURSTYLE_H24" />
			<hgrid show="1" color1="#EEEEFF@0.5" color2="#DDDDFF@0.5" />
			<hgrid2 show="1" color1="gray@0.7" color2="#E4DCCE@0.6" />
			<bar showempty="0" vmargin="0.4" patternfill="#E4DCCE" fill="darkgreen" pattern="BAND_SOLID" shadow="" />
		</session>
	</image>
</styles>