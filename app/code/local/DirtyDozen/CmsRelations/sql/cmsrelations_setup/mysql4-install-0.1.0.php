<?php
/**
 * DirtyDozen CmsRelations Setup skript
 */
$this->startSetup();

$this->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('cmsrelations_group')}
(
  `group_id` smallint unsigned not null auto_increment primary key,
  `name` varchar(63) not null,
  `type` tinyint unsigned not null default 0,
  `is_active` tinyint unsigned not null default 0,
  `updated_at` timestamp
) ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE IF NOT EXISTS {$this->getTable('cmsrelations_grouppage')}
(
  `grouppage_id` smallint unsigned not null auto_increment primary key,
  `group_id` smallint unsigned not null,
  `page_id` mediumint unsigned not null,
  `specification` varchar(31) null,
  `updated_at` timestamp
) ENGINE=InnoDB CHARSET=utf8;

");

$this->endSetup();


