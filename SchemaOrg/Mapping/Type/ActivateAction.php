<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActivateAction.
 * 
 * @method ActivateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ActivateAction setAgent(Property\Agent $agent)
 * @method ActivateAction setEndTime(Property\EndTime $endTime)
 * @method ActivateAction setError(Property\Error $error)
 * @method ActivateAction setInstrument(Property\Instrument $instrument)
 * @method ActivateAction setLocation(Property\Location $location)
 * @method ActivateAction setObject(Property\Object $object)
 * @method ActivateAction setParticipant(Property\Participant $participant)
 * @method ActivateAction setResult(Property\Result $result)
 * @method ActivateAction setStartTime(Property\StartTime $startTime)
 * @method ActivateAction setTarget(Property\Target $target)
 */
class ActivateAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActivateAction';
	}
}