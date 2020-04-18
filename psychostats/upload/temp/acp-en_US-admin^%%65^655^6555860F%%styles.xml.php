<?php /* Smarty version 2.6.18, created on 2020-04-19 00:35:37
         compiled from acp/styles.xml */ ?>
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
	-->
	<theme>
		<!-- Define overall stylesheets for all pages -->
		<css href="css/overall.css" />
		<css media="screen,projection,print" href="css/content.css" />
		<css media="print" href="print.css" />
		<!-- Define overall javascripts for all pages -->
		<script>var themeurl = 'themes/acp';</script>
		<script src="js/jquery.js" />
		<script src="js/overall.js" />
	</theme>
</styles>