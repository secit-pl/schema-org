<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChooseAction.
 * 
 * @method ChooseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ChooseAction setAgent(Property\Agent $agent)
 * @method ChooseAction setEndTime(Property\EndTime $endTime)
 * @method ChooseAction setError(Property\Error $error)
 * @method ChooseAction setInstrument(Property\Instrument $instrument)
 * @method ChooseAction setLocation(Property\Location $location)
 * @method ChooseAction setObject(Property\Object $object)
 * @method ChooseAction setParticipant(Property\Participant $participant)
 * @method ChooseAction setResult(Property\Result $result)
 * @method ChooseAction setStartTime(Property\StartTime $startTime)
 * @method ChooseAction setTarget(Property\Target $target)
 */
class ChooseAction extends AssessAction {

	/**
	 * @var Property\ActionOption
	 */
	private $actionOption;

	/**
	 * Get action option.
	 * 
	 * @return Property\ActionOption
	 */
	public function getActionOption() {
		return $this->actionOption;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChooseAction';
	}

	/**
	 * Set action option.
	 * 
	 * @param Property\ActionOption $actionOption
	 * @return ChooseAction
	 */
	public function setActionOption(Property\ActionOption $actionOption) {
		$this->actionOption = $actionOption;

		return $this;
	}
}