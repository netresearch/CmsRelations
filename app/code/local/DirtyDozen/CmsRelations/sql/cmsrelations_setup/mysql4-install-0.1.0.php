<?php
/**
 * DirtyDozen CmsRelations Setup skript
 */
$this->startSetup();

$this->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('cmsrelations_relations')}
(
  `id` smallint unsigned not null auto_increment primary key,
  `page_id` mediumint unsigned not null,
  `related_page_id` mediumint unsigned not null,
  `type` tinyint unsigned not null default 0
) ENGINE=InnoDB CHARSET=utf8;

");

$this->endSetup();

