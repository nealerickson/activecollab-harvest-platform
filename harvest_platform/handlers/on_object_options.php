<?php

/**
* Handle on on_object_options event
*
* @param NamedList $tabs
* @param User $logged_user
* @param Project $project
* @param array $tabs_settings
* @param string $interface
*/
function harvest_platform_handle_on_object_options(&$object, &$user, &$options, $interface) {
	if ($object instanceof ITracking && $object instanceof ProjectObject) {
		if ($user->getSystemPermission('can_manage_harvest_platform')) {
			$options->add('harvest_platform', array(
				'url' => '#',
				'text' => 'Harvest',
				'onclick' => new HarvestPlatformTaskCallback($object),
				'important' => true
			));
		}
	}
}