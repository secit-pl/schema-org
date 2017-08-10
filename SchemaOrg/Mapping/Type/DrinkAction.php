<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrinkAction.
 * 
 * @method DrinkAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DrinkAction setAgent(Property\Agent $agent)
 * @method DrinkAction setEndTime(Property\EndTime $endTime)
 * @method DrinkAction setError(Property\Error $error)
 * @method DrinkAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method DrinkAction setInstrument(Property\Instrument $instrument)
 * @method DrinkAction setLocation(Property\Location $location)
 * @method DrinkAction setObject(Property\Object $object)
 * @method DrinkAction setParticipant(Property\Participant $participant)
 * @method DrinkAction setResult(Property\Result $result)
 * @method DrinkAction setStartTime(Property\StartTime $startTime)
 * @method DrinkAction setTarget(Property\Target $target)
 */
class DrinkAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrinkAction';
	}
}