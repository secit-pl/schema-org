<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EatAction.
 * 
 * @method EatAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method EatAction setAgent(Property\Agent $agent)
 * @method EatAction setEndTime(Property\EndTime $endTime)
 * @method EatAction setError(Property\Error $error)
 * @method EatAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method EatAction setInstrument(Property\Instrument $instrument)
 * @method EatAction setLocation(Property\Location $location)
 * @method EatAction setObject(Property\Object $object)
 * @method EatAction setParticipant(Property\Participant $participant)
 * @method EatAction setResult(Property\Result $result)
 * @method EatAction setStartTime(Property\StartTime $startTime)
 * @method EatAction setTarget(Property\Target $target)
 */
class EatAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EatAction';
	}
}