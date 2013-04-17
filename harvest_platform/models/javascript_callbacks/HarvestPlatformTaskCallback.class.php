<?php

/**
 * HarvestPlatformTaskCallback
 */
class HarvestPlatformTaskCallback extends JavaScriptCallback {

	protected $_task;

	public function __construct($task) {
		$this->_task = $task;
	}

	/**
	 * Render callback definition
	 *
	 * @return string
	 */
	public function render() {
		$interface = AngieApplication::getPreferedInterface();

		$project = $this->_task->getProject();

		$data_project = array('id' => $project->getId(), 'name' => $project->getFieldValue('name'));
		$data_item = array('id' => $this->_task->getTaskId(), 'name' => $this->_task->getFieldValue('name'));

		$timer = '<div class="harvest-timer" data-project=\''.JSON::encode($data_project).'\' data-item=\''.JSON::encode($data_item).'\'> </div>';

		return '(function (entry, author, parent, target, interface) {
			console.log("timer init");
			var $el = $("#inspector_object_action_harvest_platform");
			if (!$el.length) {
				return;
			}

   			var timer = '.JSON::encode($timer).';
   			$el.html(timer);

			var harvestEvent = {
				type: "harvest-event:timers:add",
				element: $(".harvest-timer").last()
			};
    		$("#harvest-messaging").trigger(harvestEvent);
		});';
	}
}