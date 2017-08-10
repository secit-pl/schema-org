<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeactivateAction.
 * 
 * @method DeactivateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DeactivateAction setAgent(Property\Agent $agent)
 * @method DeactivateAction setEndTime(Property\EndTime $endTime)
 * @method DeactivateAction setError(Property\Error $error)
 * @method DeactivateAction setInstrument(Property\Instrument $instrument)
 * @method DeactivateAction setLocation(Property\Location $location)
 * @method DeactivateAction setObject(Property\Object $object)
 * @method DeactivateAction setParticipant(Property\Participant $participant)
 * @method DeactivateAction setResult(Property\Result $result)
 * @method DeactivateAction setStartTime(Property\StartTime $startTime)
 * @method DeactivateAction setTarget(Property\Target $target)
 */
class DeactivateAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeactivateAction';
	}
}