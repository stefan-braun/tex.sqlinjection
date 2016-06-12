$sql = "update `".DC_MV_CAL."` set"
	. " `exdate`='" . esc_sql($exdate) . "' "
	. "where `id`=" . $id;

if ($wpdb->query($sql)=== FALSE){
	$ret['IsSuccess'] = false;
	$ret['Msg'] = $wpdb->last_error;
}