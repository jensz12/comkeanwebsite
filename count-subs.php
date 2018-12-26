<?php
$sub_count = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UC_W5dwVHpjxue5R4ILmMZAA&key='), true);
$sub_count_main = $sub_count['items'][0]['statistics']['subscriberCount'];
?>
<?php echo number_format("$sub_count_main;") ?>