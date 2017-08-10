<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReserveAction.
 * 
 * @method ReserveAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 */
class ReserveAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReserveAction';
	}
}