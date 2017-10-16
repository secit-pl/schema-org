<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlanAction.
 */
class PlanAction extends OrganizeAction {

	/**
	 * @var Property\ScheduledTime
	 */
	private $scheduledTime;

	/**
	 * Get scheduled time.
	 * 
	 * @return Property\ScheduledTime
	 */
	public function getScheduledTime() {
		return $this->scheduledTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlanAction';
	}

	/**
	 * Set scheduled time.
	 * 
	 * @param Property\ScheduledTime $scheduledTime
	 * @return PlanAction
	 */
	public function setScheduledTime(Property\ScheduledTime $scheduledTime) {
		$this->scheduledTime = $scheduledTime;

		return $this;
	}
}