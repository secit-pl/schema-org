<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EndorseAction.
 * 
 * @method EndorseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method EndorseAction setAgent(Property\Agent $agent)
 * @method EndorseAction setEndTime(Property\EndTime $endTime)
 * @method EndorseAction setError(Property\Error $error)
 * @method EndorseAction setInstrument(Property\Instrument $instrument)
 * @method EndorseAction setLocation(Property\Location $location)
 * @method EndorseAction setObject(Property\Object $object)
 * @method EndorseAction setParticipant(Property\Participant $participant)
 * @method EndorseAction setResult(Property\Result $result)
 * @method EndorseAction setStartTime(Property\StartTime $startTime)
 * @method EndorseAction setTarget(Property\Target $target)
 */
class EndorseAction extends ReactAction {

	/**
	 * @var Property\Endorsee
	 */
	private $endorsee;

	/**
	 * Get endorsee.
	 * 
	 * @return Property\Endorsee
	 */
	public function getEndorsee() {
		return $this->endorsee;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EndorseAction';
	}

	/**
	 * Set endorsee.
	 * 
	 * @param Property\Endorsee $endorsee
	 * @return EndorseAction
	 */
	public function setEndorsee(Property\Endorsee $endorsee) {
		$this->endorsee = $endorsee;

		return $this;
	}
}