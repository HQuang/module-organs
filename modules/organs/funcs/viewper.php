<?php
/**
 * @Project NUKEVIET 3.0
 * @Author VINADES., JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES ., JSC. All rights reserved
 * @Createdate Dec 3, 2010  11:32:04 AM 
 */

if ( ! defined( 'NV_IS_MOD_ORGAN' ) ) die( 'Stop!!!' );
$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];
$id = $nv_Request->get_int( 'id', 'get',0 );
$data_content = array() ;
$sql = "SELECT * FROM `" . NV_PREFIXLANG . "_" . $module_data . "_person` WHERE personid=" . intval( $id );
$result = $db->sql_query( $sql );
$data_content = $db->sql_fetchrow( $result, 2 );

$contents = viewper($data_content);

include ( NV_ROOTDIR . "/includes/header.php" );
echo  $contents ;
include ( NV_ROOTDIR . "/includes/footer.php" );

?>