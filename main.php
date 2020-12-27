<?php

require __DIR__ . '/vendor/autoload.php';

use PierreMiniggio\YoutubeChannelVideoInformationsSaver\App;

try {
    return (new App())->run();
} catch (Exception $e) {
    echo get_class($e) . ' : ' . $e->getMessage();
}
