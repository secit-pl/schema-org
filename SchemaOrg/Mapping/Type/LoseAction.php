<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LoseAction.
 * 
 * @method LoseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LoseAction setAgent(Property\Agent $agent)
 * @method LoseAction setEndTime(Property\EndTime $endTime)
 * @method LoseAction setError(Property\Error $error)
 * @method LoseAction setInstrument(Property\Instrument $instrument)
 * @method LoseAction setLocation(Property\Location $location)
 * @method LoseAction setObject(Property\Object $object)
 * @method LoseAction setParticipant(Property\Participant $participant)
 * @method LoseAction setResult(Property\Result $result)
 * @method LoseAction setStartTime(Property\StartTime $startTime)
 * @method LoseAction setTarget(Property\Target $target)
 */
class LoseAction extends AchieveAction {

	/**
	 * @var Property\Winner
	 */
	private $winner;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LoseAction';
	}

	/**
	 * Get winner.
	 * 
	 * @return Property\Winner
	 */
	public function getWinner() {
		return $this->winner;
	}

	/**
	 * Set winner.
	 * 
	 * @param Property\Winner $winner
	 * @return LoseAction
	 */
	public function setWinner(Property\Winner $winner) {
		$this->winner = $winner;

		return $this;
	}
}