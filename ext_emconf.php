<?php

########################################################################
# Extension Manager/Repository config file for ext: "devlog"
#
# Auto generated 13-10-2008 21:48
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Developer Log',
	'description' => 'The Developer log extension provides development logging/debugging functionality for usage of t3lib_div::devlog() and a BE module to browse the logs.',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Rene Fritz, Francois Suter',
	'author_email' => 'typo3@cobweb.ch',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '2.5.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:9:"ChangeLog";s:4:"1bc7";s:19:"class.tx_devlog.php";s:4:"0809";s:21:"ext_conf_template.txt";s:4:"6b43";s:12:"ext_icon.gif";s:4:"cd8e";s:17:"ext_localconf.php";s:4:"3d1f";s:14:"ext_tables.php";s:4:"b24e";s:14:"ext_tables.sql";s:4:"e1b1";s:18:"icon_tx_devlog.gif";s:4:"cd8e";s:16:"locallang_db.xml";s:4:"a89f";s:7:"tca.php";s:4:"fcb3";s:14:"doc/manual.sxw";s:4:"fec0";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"4129";s:14:"mod1/index.php";s:4:"de74";s:18:"mod1/locallang.xml";s:4:"8f76";s:22:"mod1/locallang_mod.xml";s:4:"5454";s:19:"mod1/moduleicon.gif";s:4:"cd8e";}',
	'suggests' => array(
	),
);

?>