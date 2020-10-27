<?php

// The server/domain name
define('HOST', 'http://localhost');
// Vendor directory path
define('VENDOR', APP_ROOT . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, '/vendor/'));
// Layouts directory path
define('LAYOUTS', APP_ROOT . str_replace(['/', '\\'], DIRECTORY_SEPARATOR,'/src/templates/layouts/'));
// Templates directory path
define('TEMPLATES', APP_ROOT . str_replace(['/', '\\'], DIRECTORY_SEPARATOR,'/src/templates/'));
// Logs directory path
define('LOGS', APP_ROOT . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, '/var/logs/'));
// Config directory path
define('CONFIG', APP_ROOT . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, '/config/'));
