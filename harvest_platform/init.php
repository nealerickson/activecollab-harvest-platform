<?php

/**
 * Harvest Platform module initialisation file
 */

define('HARVEST_PLATFORM_MODULE', 'harvest_platform');
define('HARVEST_PLATFORM_MODULE_PATH', __DIR__);

AngieApplication::setForAutoload(array(
	'HarvestPlatformTaskCallback' => HARVEST_PLATFORM_MODULE_PATH . '/models/javascript_callbacks/HarvestPlatformTaskCallback.class.php'
));