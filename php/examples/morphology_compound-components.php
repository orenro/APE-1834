<?php
/**
 * Example code to call Rosette API to get de-compounded words from a piece of text
 **/

require_once("vendor/autoload.php");    // assuming composer.json is properly configured with Rosette API
use rosette\api\Api;
use rosette\api\DocumentParameters;
use rosette\api\RosetteConstants;
use rosette\api\RosetteException;

$options = getopt(null, array("key:", "url::"));
if (!isset($options["key"])) {
    echo "Usage: php " . __FILE__ . " --key <api_key> --url=<alternate_url>\n";
    exit();
}

$api = isset($options["url"]) ? new Api($options["key"], $options["url"]) : new Api($options["key"]);
$api->setVersionChecked(true);
$params = new DocumentParameters();
$params->params["content"] = "Rechtsschutzversicherungsgesellschaften";

try {
    $result = $api->morphology($params, RosetteConstants::$MorphologyOutput["COMPOUND_COMPONENTS"]);
    var_dump($result);
} catch (RosetteException $e) {
    error_log($e);
}
