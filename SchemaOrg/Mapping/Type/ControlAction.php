<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ControlAction.
 * 
 * @method ControlAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ControlAction setAgent(Property\Agent $agent)
 * @method ControlAction setEndTime(Property\EndTime $endTime)
 * @method ControlAction setError(Property\Error $error)
 * @method ControlAction setInstrument(Property\Instrument $instrument)
 * @method ControlAction setLocation(Property\Location $location)
 * @method ControlAction setObject(Property\Object $object)
 * @method ControlAction setParticipant(Property\Participant $participant)
 * @method ControlAction setResult(Property\Result $result)
 * @method ControlAction setStartTime(Property\StartTime $startTime)
 * @method ControlAction setTarget(Property\Target $target)
 */
class ControlAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ControlAction';
	}
}