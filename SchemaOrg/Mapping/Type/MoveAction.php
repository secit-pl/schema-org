<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MoveAction.
 * 
 * @method MoveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method MoveAction setAgent(Property\Agent $agent)
 * @method MoveAction setEndTime(Property\EndTime $endTime)
 * @method MoveAction setError(Property\Error $error)
 * @method MoveAction setInstrument(Property\Instrument $instrument)
 * @method MoveAction setLocation(Property\Location $location)
 * @method MoveAction setObject(Property\Object $object)
 * @method MoveAction setParticipant(Property\Participant $participant)
 * @method MoveAction setResult(Property\Result $result)
 * @method MoveAction setStartTime(Property\StartTime $startTime)
 * @method MoveAction setTarget(Property\Target $target)
 */
class MoveAction extends Action {

	/**
	 * @var Property\FromLocation
	 */
	private $fromLocation;

	/**
	 * @var Property\ToLocation
	 */
	private $toLocation;

	/**
	 * Get from location.
	 * 
	 * @return Property\FromLocation
	 */
	public function getFromLocation() {
		return $this->fromLocation;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MoveAction';
	}

	/**
	 * Get to location.
	 * 
	 * @return Property\ToLocation
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set from location.
	 * 
	 * @param Property\FromLocation $fromLocation
	 * @return MoveAction
	 */
	public function setFromLocation(Property\FromLocation $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocation $toLocation
	 * @return MoveAction
	 */
	public function setToLocation(Property\ToLocation $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}