<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WinAction.
 * 
 * @method WinAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WinAction setAgent(Property\Agent $agent)
 * @method WinAction setEndTime(Property\EndTime $endTime)
 * @method WinAction setError(Property\Error $error)
 * @method WinAction setInstrument(Property\Instrument $instrument)
 * @method WinAction setLocation(Property\Location $location)
 * @method WinAction setObject(Property\Object $object)
 * @method WinAction setParticipant(Property\Participant $participant)
 * @method WinAction setResult(Property\Result $result)
 * @method WinAction setStartTime(Property\StartTime $startTime)
 * @method WinAction setTarget(Property\Target $target)
 */
class WinAction extends AchieveAction {

	/**
	 * @var Property\Loser
	 */
	private $loser;

	/**
	 * Get loser.
	 * 
	 * @return Property\Loser
	 */
	public function getLoser() {
		return $this->loser;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WinAction';
	}

	/**
	 * Set loser.
	 * 
	 * @param Property\Loser $loser
	 * @return WinAction
	 */
	public function setLoser(Property\Loser $loser) {
		$this->loser = $loser;

		return $this;
	}
}