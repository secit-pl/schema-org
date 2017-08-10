<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IgnoreAction.
 * 
 * @method IgnoreAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method IgnoreAction setAgent(Property\Agent $agent)
 * @method IgnoreAction setEndTime(Property\EndTime $endTime)
 * @method IgnoreAction setError(Property\Error $error)
 * @method IgnoreAction setInstrument(Property\Instrument $instrument)
 * @method IgnoreAction setLocation(Property\Location $location)
 * @method IgnoreAction setObject(Property\Object $object)
 * @method IgnoreAction setParticipant(Property\Participant $participant)
 * @method IgnoreAction setResult(Property\Result $result)
 * @method IgnoreAction setStartTime(Property\StartTime $startTime)
 * @method IgnoreAction setTarget(Property\Target $target)
 */
class IgnoreAction extends AssessAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IgnoreAction';
	}
}