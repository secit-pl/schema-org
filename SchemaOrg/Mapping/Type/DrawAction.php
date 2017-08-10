<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrawAction.
 * 
 * @method DrawAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DrawAction setAgent(Property\Agent $agent)
 * @method DrawAction setEndTime(Property\EndTime $endTime)
 * @method DrawAction setError(Property\Error $error)
 * @method DrawAction setInstrument(Property\Instrument $instrument)
 * @method DrawAction setLocation(Property\Location $location)
 * @method DrawAction setObject(Property\Object $object)
 * @method DrawAction setParticipant(Property\Participant $participant)
 * @method DrawAction setResult(Property\Result $result)
 * @method DrawAction setStartTime(Property\StartTime $startTime)
 * @method DrawAction setTarget(Property\Target $target)
 */
class DrawAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrawAction';
	}
}