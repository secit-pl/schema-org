<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ApplyAction.
 * 
 * @method ApplyAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ApplyAction setAgent(Property\Agent $agent)
 * @method ApplyAction setEndTime(Property\EndTime $endTime)
 * @method ApplyAction setError(Property\Error $error)
 * @method ApplyAction setInstrument(Property\Instrument $instrument)
 * @method ApplyAction setLocation(Property\Location $location)
 * @method ApplyAction setObject(Property\Object $object)
 * @method ApplyAction setParticipant(Property\Participant $participant)
 * @method ApplyAction setResult(Property\Result $result)
 * @method ApplyAction setStartTime(Property\StartTime $startTime)
 * @method ApplyAction setTarget(Property\Target $target)
 */
class ApplyAction extends OrganizeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApplyAction';
	}
}