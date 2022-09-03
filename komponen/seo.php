<?php
$seo = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM seo"));

if (is_null($seo)) {
    $seo['description'] = "";
    $seo['keywords'] = "";
    $seo['author'] = "";
    $seo['robots_index'] = 1;
    $seo['robots_follow'] = 1;
}
?>
<meta name="description" content="<?php echo $seo['description'] ?>">
<meta name="keywords" content="<?php echo $seo['keywords'] ?>">
<meta name="author" content="<?php echo $seo['author'] ?>">
<meta name="robots" content="<?php echo ($seo['robots_index'] ? "index" : "noindex") ?>,<?php echo ($seo['robots_follow'] ? "follow" : "nofollow") ?>">