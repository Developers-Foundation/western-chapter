<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/10/16
 * Time: 12:52 AM
 */

$linkTo = $_GET['link'];
switch ($linkTo) {
    case "dev":
        $url = "//developersfoundation.ca/";
        break;
    case "facebook":
        $url = "//www.facebook.com/developersfoundation/?fref=ts";
        break;
    case "blog":
    case "rss":
    case "medium":
        $url = "//medium.com/@DevFound/welcome-to-the-developers-foundation-blog-c8ca340b658#.g08o74wl6";
        break;
    case "github":
        $url = "//github.com/";
        break;
    case "home":
    default:
        $url = "//developersfoundation.ca/";
}

header("Location: " . $url);
exit;
