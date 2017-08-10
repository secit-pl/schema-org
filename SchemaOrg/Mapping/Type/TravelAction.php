<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TravelAction.
 * 
 * @method TravelAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TravelAction setAgent(Property\Agent $agent)
 * @method TravelAction setEndTime(Property\EndTime $endTime)
 * @method TravelAction setError(Property\Error $error)
 * @method TravelAction setFromLocation(Property\FromLocation $fromLocation)
 * @method TravelAction setInstrument(Property\Instrument $instrument)
 * @method TravelAction setLocation(Property\Location $location)
 * @method TravelAction setObject(Property\Object $object)
 * @method TravelAction setParticipant(Property\Participant $participant)
 * @method TravelAction setResult(Property\Result $result)
 * @method TravelAction setStartTime(Property\StartTime $startTime)
 * @method TravelAction setTarget(Property\Target $target)
 * @method TravelAction setToLocation(Property\ToLocation $toLocation)
 */
class TravelAction extends MoveAction {

	/**
	 * @var Property\Distance
	 */
	private $distance;

	/**
	 * Get distance.
	 * 
	 * @return Property\Distance
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TravelAction';
	}

	/**
	 * Set distance.
	 * 
	 * @param Property\Distance $distance
	 * @return TravelAction
	 */
	public function setDistance(Property\Distance $distance) {
		$this->distance = $distance;

		return $this;
	}
}