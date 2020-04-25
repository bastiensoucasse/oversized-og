<?php
define("PROTOCOL", isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" ? "https" : "http");
define("BASE", PROTOCOL . "://" . $_SERVER["HTTP_HOST"] . "/");
define("ID", $page["id"]);
if (ID == "home") define("TITLE", "Oversized");
else define ("TITLE", $page["name"] . " - " . "Oversized");
define("DESCRIPTION", $page["description"]);
?>

<head>
    <base href="<?= BASE ?>" />
    <link rel="canonical" href="<?= BASE . ID ?>" />
    <link rel="manifest" href="manifest.json" />
    <link rel="shortcut icon" href="images/icon.png" />
    <link rel="apple-touch-icon" href="images/icon.png" />
    <link rel="stylesheet" href="styles/oversized.css" />
    <meta charset="utf-8" />
    <meta name="description" content="<?= DESCRIPTION ?>" />
    <meta name="theme-color" content="#111111" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title><?= TITLE ?></title>
</head>
