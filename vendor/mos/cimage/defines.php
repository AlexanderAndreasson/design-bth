<?php
// Version of cimage and img.php
define("CIMAGE_VERSION", "v0.8.6 (2023-10-27)");

// For CRemoteImage
define("CIMAGE_USER_AGENT", "CImage/" . CIMAGE_VERSION);

// Image type IMG_WEBP is only defined from 5.6.25
if (!defined("IMG_WEBP")) {
    define("IMG_WEBP", -1);
}
