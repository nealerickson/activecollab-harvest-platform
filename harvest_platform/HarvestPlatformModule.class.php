<?php

/**
 * Copyright (c) 2013 Neal Erickson, Austin Siewert
 *
 *	Permission is hereby granted, free of charge, to any person obtaining
 *	a copy of this software and associated documentation files (the
 *	"Software"), to deal in the Software without restriction, including
 *	without limitation the rights to use, copy, modify, merge, publish,
 *	distribute, sublicense, and/or sell copies of the Software, and to
 *	permit persons to whom the Software is furnished to do so, subject to
 *	the following conditions:
 *
 *	The above copyright notice and this permission notice shall be included
 *	in all copies or substantial portions of the Software.
 *
 *	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 *	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 *	MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 *	IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 *	CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 *	TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 *	SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *	Harvest Platform module definition class
 */

class HarvestPlatformModule extends AngieModule {

	/**
	 * Module name
	 *
	 * @var string
	 */
	protected $name = 'harvest_platform';

	/**
	 * Module version
	 *
	 * @var string
	 */
	protected $version = '1.0';

	/**
	 * Get module display name
	 *
	 * @return string
	 */
	public function getDisplayName() {
		return lang('Harvest Platform');
	}

	/**
	 * Get module description
	 *
	 * @return string
	 */
	public function getDescription() {
		return lang('Integration with Harvest Platform');
	}

	/**
	 * List events that this module listens to and define event handlers
	 */
	public function defineHandlers() {
		EventsManager::listen('on_object_options', 'on_object_options');
		EventsManager::listen('on_system_permissions', 'on_system_permissions');
	}
}