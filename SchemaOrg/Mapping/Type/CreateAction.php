<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreateAction.
 * 
 * @method CreateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CreateAction setAgent(Property\Agent $agent)
 * @method CreateAction setEndTime(Property\EndTime $endTime)
 * @method CreateAction setError(Property\Error $error)
 * @method CreateAction setInstrument(Property\Instrument $instrument)
 * @method CreateAction setLocation(Property\Location $location)
 * @method CreateAction setObject(Property\Object $object)
 * @method CreateAction setParticipant(Property\Participant $participant)
 * @method CreateAction setResult(Property\Result $result)
 * @method CreateAction setStartTime(Property\StartTime $startTime)
 * @method CreateAction setTarget(Property\Target $target)
 */
class CreateAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreateAction';
	}
}