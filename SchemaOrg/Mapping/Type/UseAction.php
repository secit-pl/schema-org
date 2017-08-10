<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UseAction.
 * 
 * @method UseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method UseAction setAgent(Property\Agent $agent)
 * @method UseAction setEndTime(Property\EndTime $endTime)
 * @method UseAction setError(Property\Error $error)
 * @method UseAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method UseAction setInstrument(Property\Instrument $instrument)
 * @method UseAction setLocation(Property\Location $location)
 * @method UseAction setObject(Property\Object $object)
 * @method UseAction setParticipant(Property\Participant $participant)
 * @method UseAction setResult(Property\Result $result)
 * @method UseAction setStartTime(Property\StartTime $startTime)
 * @method UseAction setTarget(Property\Target $target)
 */
class UseAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UseAction';
	}
}