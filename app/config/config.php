<?php
//Setting up the BaseURL
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https";
} else {
    $url = "http";
}

$url .= "://{$_SERVER['HTTP_HOST']}";

//Defining the important url's
define("BASEURL", "{$url}/");
define("BASEURL_CMS", "{$url}/admin/");
define("DOCUMENT_ROOT", "{$_SERVER['DOCUMENT_ROOT']}");


//Function for is a mobile device check
function isMobileDevice()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

<!-- Pass the php define's to JavaScript -->
<script defer>
    const BASEURL = "<?= BASEURL ?>";
    const BASEURL_CMS = "<?= BASEURL_CMS ?>";
</script>
