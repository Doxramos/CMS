<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/6/2016
 * Time: 6:33 AM
 */
session_start();
$_SESSION['user']['id'] = 1;
DEFINE("BASE_DIR", dirname(__file__));
DEFINE("CONFIG_PATH", BASE_DIR.'/config.json');
//Set ADMIN Path
//Set API Path
DEFINE("CORE_DIR", BASE_DIR.'/core');
DEFINE("CLASS_DIR", CORE_DIR.'/classes');
DEFINE("HOOK_DIR", CORE_DIR.'/hooks');
//SET Install Path
DEFINE("PUBLIC_DIR", BASE_DIR.'/public_html');
DEFINE("APP_DIR", PUBLIC_DIR.'/app');
DEFINE("THEME_DIR", APP_DIR.'/themes');
//Set Module Path
//Set Plugin Path
require_once CORE_DIR.'/core.hook';
SetConfig();
SetDebugMode();
LoadDatabase("website");
LoadClasses();
LoadHooks();
//TODO Along with Todo notes. Things to do will be placed in comments in individual files
