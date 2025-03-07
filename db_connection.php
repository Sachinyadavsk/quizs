<?php
session_start();
//ini_set('session.cookie_domain', '.https://game.reapbucks.com/quiz/');
//ini_set('session.gc_maxlifetime', 3600);
?>

<?php
header("Cache-Control: max-age=86400, public");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 86400) . " GMT");
$content = 'https://game.reapbucks.com/';
$etag = md5($content);
header("ETag: \"$etag\"");
$lastModifiedTime = time();
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModifiedTime) . " GMT");
if ((isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) ||
    (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastModifiedTime)) {
    header("HTTP/1.1 304 Not Modified");
    exit;
}
?>
<?php
$con=mysqli_connect("localhost","nwoowcom_quiz","Bffpwyl)EPlE","nwoowcom_quiz");
?>