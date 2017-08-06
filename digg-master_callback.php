<?php
/**
 * 文章顶踩
 * @copyright (c) xiaosong.org All Rights Reserved
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}

function callback_init(){
       $DB = Database::getInstance();
	if ( mysql_fetch_array( $DB->query( "Describe ".DB_PREFIX."blog digg" ) ) == false ) {
			$sql = "ALTER TABLE ".DB_PREFIX."blog ADD digg varchar(10) NOT NULL DEFAULT '0,0'";
			$DB->query($sql);
	} 


}


function callback_rm(){
	$DB = Database::getInstance();
	$query = $DB->query("ALTER TABLE ".DB_PREFIX."blog  DROP digg");
}