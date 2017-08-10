<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReadAction.
 * 
 * @method ReadAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReadAction setAgent(Property\Agent $agent)
 * @method ReadAction setEndTime(Property\EndTime $endTime)
 * @method ReadAction setError(Property\Error $error)
 * @method ReadAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method ReadAction setInstrument(Property\Instrument $instrument)
 * @method ReadAction setLocation(Property\Location $location)
 * @method ReadAction setObject(Property\Object $object)
 * @method ReadAction setParticipant(Property\Participant $participant)
 * @method ReadAction setResult(Property\Result $result)
 * @method ReadAction setStartTime(Property\StartTime $startTime)
 * @method ReadAction setTarget(Property\Target $target)
 */
class ReadAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReadAction';
	}
}