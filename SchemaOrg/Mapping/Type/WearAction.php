<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WearAction.
 * 
 * @method WearAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WearAction setAgent(Property\Agent $agent)
 * @method WearAction setEndTime(Property\EndTime $endTime)
 * @method WearAction setError(Property\Error $error)
 * @method WearAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method WearAction setInstrument(Property\Instrument $instrument)
 * @method WearAction setLocation(Property\Location $location)
 * @method WearAction setObject(Property\Object $object)
 * @method WearAction setParticipant(Property\Participant $participant)
 * @method WearAction setResult(Property\Result $result)
 * @method WearAction setStartTime(Property\StartTime $startTime)
 * @method WearAction setTarget(Property\Target $target)
 */
class WearAction extends UseAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WearAction';
	}
}