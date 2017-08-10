<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TakeAction.
 * 
 * @method TakeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TakeAction setAgent(Property\Agent $agent)
 * @method TakeAction setEndTime(Property\EndTime $endTime)
 * @method TakeAction setError(Property\Error $error)
 * @method TakeAction setFromLocation(Property\FromLocation $fromLocation)
 * @method TakeAction setInstrument(Property\Instrument $instrument)
 * @method TakeAction setLocation(Property\Location $location)
 * @method TakeAction setObject(Property\Object $object)
 * @method TakeAction setParticipant(Property\Participant $participant)
 * @method TakeAction setResult(Property\Result $result)
 * @method TakeAction setStartTime(Property\StartTime $startTime)
 * @method TakeAction setTarget(Property\Target $target)
 * @method TakeAction setToLocation(Property\ToLocation $toLocation)
 */
class TakeAction extends TransferAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TakeAction';
	}
}