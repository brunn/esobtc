<?php
// Copyright 2013 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

?>
<div class='attachments'>
	<ul>
		<?php foreach ($data["attachments"] as $attachment): ?>
		<li>
<?PHP 
$jutud = explode('.',$attachment["filename"]);
if($jutud[1]=='zip'){
?>
<a href='<?php echo URL("attachment/".$attachment["attachmentId"]."_".$attachment["filename"]); ?>' target='_blank'>
<?php echo $attachment["filename"]; ?></a>
<?PHP
}else{
?>
<img src="<?php echo URL("attachment/".$attachment["attachmentId"]."_".$attachment["filename"]); ?>" />
<?PHP
}
?>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
