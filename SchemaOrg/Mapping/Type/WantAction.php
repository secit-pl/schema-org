<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WantAction.
 * 
 * @method WantAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WantAction setAgent(Property\Agent $agent)
 * @method WantAction setEndTime(Property\EndTime $endTime)
 * @method WantAction setError(Property\Error $error)
 * @method WantAction setInstrument(Property\Instrument $instrument)
 * @method WantAction setLocation(Property\Location $location)
 * @method WantAction setObject(Property\Object $object)
 * @method WantAction setParticipant(Property\Participant $participant)
 * @method WantAction setResult(Property\Result $result)
 * @method WantAction setStartTime(Property\StartTime $startTime)
 * @method WantAction setTarget(Property\Target $target)
 */
class WantAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WantAction';
	}
}