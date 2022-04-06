<?php
/**
 * VFM - veno file manager thumb
 *
 * PHP version >= 5.3
 *
 * @category  PHP
 * @package   VenoFileManager
 * @copyright 2013 Nicola Franchini
 * @link      http://veno-file-manager.herokuapp.com/
 */
require_once 'vfm-admin/config.php';
if ($_CONFIG['debug_mode'] === true) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
require_once 'vfm-admin/class/class.setup.php';
require_once 'vfm-admin/class/class.imageserver.php';
require_once 'vfm-admin/class/class.gatekeeper.php';
require_once 'vfm-admin/class/class.utils.php';
$setUp = new SetUp();

if (!GateKeeper::isAccessAllowed() && $setUp->getConfig('share_thumbnails') !== true) {
    die('access denied');
}
$imageServer = new ImageServer();
$imageServer->showImage();

exit;
