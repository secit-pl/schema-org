<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AssessAction.
 * 
 * @method AssessAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AssessAction setAgent(Property\Agent $agent)
 * @method AssessAction setEndTime(Property\EndTime $endTime)
 * @method AssessAction setError(Property\Error $error)
 * @method AssessAction setInstrument(Property\Instrument $instrument)
 * @method AssessAction setLocation(Property\Location $location)
 * @method AssessAction setObject(Property\Object $object)
 * @method AssessAction setParticipant(Property\Participant $participant)
 * @method AssessAction setResult(Property\Result $result)
 * @method AssessAction setStartTime(Property\StartTime $startTime)
 * @method AssessAction setTarget(Property\Target $target)
 */
class AssessAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AssessAction';
	}
}