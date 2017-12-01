<?php

// update cmd - checks alter cmd before try / catch update
// set values in array
$sqls = array();						// just sql cmd in string
$sqls_alter_change_column = array(); 	// array -> tbl_name | col_name | col_name_new | column_definition	
$sqls_alter_modify_column = array();	// array -> tbl_name | col_name | column_definition
$sqls_alter_add_column = array();		// array -> tbl_name | col_name | column_definition
$sqls_alter_drop_column = array();		// array -> tbl_name | col_name

// 1.5.3	20150221
$sqls_alter_add_column[] = array("tbl_name" => "site", "col_name" => "site_template_sidebar_width", "column_definition" => "int(2) unsigned NOT NULL DEFAULT '25' COMMENT 'set sidebar width in percent' AFTER `site_theme`");
// 20150320
$sqls_alter_add_column[] = array("tbl_name" => "site", "col_name" => "site_autosave", "column_definition" => "int(6) unsigned NOT NULL DEFAULT '120000' COMMENT 'set autosave interval' AFTER `site_seo_url`");
//20150728
$sqls[] = "ALTER TABLE pages ADD FULLTEXT INDEX pages_index (title, content, story_content, story_wide_content, tag)";
$sqls[] = "ALTER TABLE users ADD FULLTEXT INDEX users_index (first_name, last_name, email, user_name)";
$sqls_alter_modify_column[] = array("tbl_name" => "pages", "col_name" => "header", "column_definition" => "varchar(100) DEFAULT '' COMMENT 'Set static header image' AFTER `tag`");
// 20150804
$sqls_alter_add_column[] = array("tbl_name" => "site", "col_name" => "site_ui_theme", "column_definition" => "varchar(25) DEFAULT '' COMMENT 'set new jquery-ui theme' AFTER `site_theme`");
// 20151213
$sqls_alter_add_column[] = array("tbl_name" => "site", "col_name" => "site_title_position", "column_definition" => "int(1) DEFAULT '0' COMMENT 'set title position' AFTER `site_template_content_padding`");
// 20160216
// moved folder widgets from /content to /cms
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "title_hide", "column_definition" => "int(1) DEFAULT '0' COMMENT '0:show title, 1:hide title' AFTER `title`");
// 1.6.3
//20160306
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "story_link", "column_definition" => "tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '0:false, 1:true' AFTER `story_event_date`");
// 1.8.0
//20171201
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_active", "column_definition" => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0:false, 1:true' AFTER `content_author`");
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_area", "column_definition" => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0:above, 1:above next to, 2:below next to, 3:below' AFTER `grid_active`");
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_custom_classes", "column_definition" => "varchar(50) DEFAULT '' COMMENT 'custom css' AFTER `grid_area`");
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_content", "column_definition" => "longtext DEFAULT '' COMMENT 'json format' AFTER `grid_custom_classes`");
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_cell_template", "column_definition" => "tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0:image top 1:heading top' AFTER `grid_content`");
$sqls_alter_add_column[] = array("tbl_name" => "pages", "col_name" => "grid_cell_image_height", "column_definition" => "int(3) unsigned NOT NULL DEFAULT '140' COMMENT '0:image above 1:image below' AFTER `grid_cell_template`");

?>