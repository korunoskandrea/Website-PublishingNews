<?php
session_start();

const ROOT = __DIR__.DIRECTORY_SEPARATOR;
const DATA = ROOT.'data'.DIRECTORY_SEPARATOR;
const SERVICE = ROOT.'services'.DIRECTORY_SEPARATOR;
const MODEL = ROOT. 'models'.DIRECTORY_SEPARATOR;

spl_autoload_register(function ($className) {
     if (file_exists(SERVICE.$className.'.php')) {
        require_once SERVICE.$className.'.php';
    } else if (file_exists(MODEL.$className.'.php')) {
        require_once MODEL . $className . '.php';
    }  else if (file_exists(DATA.$className.'.php')) {
        require_once DATA . $className . '.php';
    }
});

//AuthService::get()->handleTimeOut();
