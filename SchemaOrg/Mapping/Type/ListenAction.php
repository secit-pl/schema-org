<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ListenAction.
 * 
 * @method ListenAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ListenAction setAgent(Property\Agent $agent)
 * @method ListenAction setEndTime(Property\EndTime $endTime)
 * @method ListenAction setError(Property\Error $error)
 * @method ListenAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method ListenAction setInstrument(Property\Instrument $instrument)
 * @method ListenAction setLocation(Property\Location $location)
 * @method ListenAction setObject(Property\Object $object)
 * @method ListenAction setParticipant(Property\Participant $participant)
 * @method ListenAction setResult(Property\Result $result)
 * @method ListenAction setStartTime(Property\StartTime $startTime)
 * @method ListenAction setTarget(Property\Target $target)
 */
class ListenAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ListenAction';
	}
}