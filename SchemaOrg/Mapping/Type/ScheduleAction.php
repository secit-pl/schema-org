<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScheduleAction.
 * 
 * @method ScheduleAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 */
class ScheduleAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScheduleAction';
	}
}