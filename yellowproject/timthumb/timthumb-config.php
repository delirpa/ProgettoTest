<?php
define ('ALLOW_EXTERNAL', TRUE);
define ('DEFAULT_Q', 95);
#define ('FILE_CACHE_DIRECTORY', '../../../uploads/timcache');
if(! isset($ALLOWED_SITES)){
    $ALLOWED_SITES = array (
        'flickr.com',
        'staticflickr.com',
        'picasa.com',
        'img.youtube.com',
        'upload.wikimedia.org',
        'photobucket.com',
        'imgur.com',
        'imageshack.us',
        'tinypic.com',
        'themedev.me',
        'demo.gt3themes.com',
        'gt3themes.com',
    );
}
?>