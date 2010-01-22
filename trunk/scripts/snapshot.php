<?php
// Please note that this is a sample script for testing purposes on a local server
// IMPORTANT! NEVER upload this script onto a public server!!!
require_once('../../../config.php');
global $CFG;
//
require_login('13');

if(isset ($GLOBALS["HTTP_RAW_POST_DATA"]))
{
	$mplayer_image =  $GLOBALS["HTTP_RAW_POST_DATA"];
	$mplayer_datetime = date('Y\_M\_dS\_h\.i\.s');
	$mplayer_courseid = '13';
	$mplayer_filepath = fopen($CFG->dataroot.'/'.$mplayer_courseid.'/snapshots/snapshot_'.$mplayer_datetime.'.jpg', 'wb');
	fwrite($mplayer_filepath, $mplayer_image);
	fclose($mplayer_filepath);
	if (exif_imagetype($CFG->dataroot.'/'.$mplayer_courseid.'/snapshots/snapshot_'.$mplayer_datetime.'.jpg') == IMAGETYPE_JPEG) {
		$mplayer_moodledata = $CFG->wwwroot.'/file.php/'.$mplayer_courseid.'/';
		echo $mplayer_moodledata.'snapshots/snapshot_'.$mplayer_datetime.'.jpg';
		exit();
	}
}
echo 'error';
?>