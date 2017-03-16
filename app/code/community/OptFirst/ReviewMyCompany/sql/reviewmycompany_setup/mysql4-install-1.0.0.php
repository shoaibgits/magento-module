<?php
$installer = $this;  //Getting Installer Class Object In A Variable
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('optfirst_reviewmycompany')};
CREATE TABLE {$this->getTable('optfirst_reviewmycompany')} (
  `id_optfirst_reviewmycompany` int(11) unsigned NOT NULL auto_increment,
  `facebook` varchar(255) NOT NULL default '',
  `twitter` varchar(255) NOT NULL default '',
  `google` text NOT NULL default '',
  `linkedin` smallint(6) NOT NULL default '0',
  `yelp` datetime NULL,
  PRIMARY KEY (`id_optfirst_reviewmycompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();
?>