<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlanAction.
 */
class PlanAction {

	/**
	 */
	private $id;

	/**
	 * @var Property\ScheduledTime
	 */
	private $scheduledTime;

	/**
	 * PlanAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

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