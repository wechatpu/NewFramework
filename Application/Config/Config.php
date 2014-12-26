<?php
/**
 * Configuration file.
 * @author Henrik
 */
namespace Application\Config;

/*
 * Smarty config
 */
DEFINE('SMARTY_SPL_AUTOLOAD',1);
DEFINE('SMARTY_TEMPLATE_DIR', 'Public/smarty/templates/');
DEFINE('SMARTY_TEMPLATE_C_DIR', 'Public/smarty/templates_c/');
DEFINE('SMARTY_CACHE_DIR', 'Public/smarty/cache/');
DEFINE('SMARTY_CONFIG_DIR', 'Public/smarty/configs/');
DEFINE('SMARTY_USE_CACHE', false);
DEFINE('SMARTY_CACHE_LIFETIME', 120);

/*
 * Database connection configuration
 */
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_PORT', 3306);
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME', 'prjgroup');