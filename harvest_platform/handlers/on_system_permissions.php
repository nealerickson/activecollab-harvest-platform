<?php

/**
 * Handle on_system_permissions event
 *
 * @param NamedList $permissions
 */
function harvest_platform_handle_on_system_permissions(NamedList &$permissions) {
	$permissions->add('can_manage_harvest_platform', array(
		'name' => lang('Manage Harvest Platform'),
		'description' => lang('This permissions enables users to interact with the Harvest Platform when editing tasks'),
		'depends_on' => 'has_system_access',
	));
}