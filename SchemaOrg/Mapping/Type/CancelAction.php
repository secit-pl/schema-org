<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CancelAction.
 * 
 * @method CancelAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 */
class CancelAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CancelAction';
	}
}