<?php 

require_once('goodreads-oauth_v1/GoodreadsAPI.php');


session_start();

$obj = new GoodreadsApi(iSAfjzMo6QHWifwOfCQvQ, XRCIVEsXshWdT2NwKGqHoQ6e8qzC1YclV45Zgp2GADg, $access_token['oauth_token'], $access_token['oauth_token_secret']);

	$content = $obj->doGet('https://www.goodreads.com/user/compare/'.$_GET['id'].'.xml');
	print_r($content);
	unset ($obj);
?>

