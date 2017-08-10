<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ArriveAction.
 * 
 * @method ArriveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ArriveAction setAgent(Property\Agent $agent)
 * @method ArriveAction setEndTime(Property\EndTime $endTime)
 * @method ArriveAction setError(Property\Error $error)
 * @method ArriveAction setFromLocation(Property\FromLocation $fromLocation)
 * @method ArriveAction setInstrument(Property\Instrument $instrument)
 * @method ArriveAction setLocation(Property\Location $location)
 * @method ArriveAction setObject(Property\Object $object)
 * @method ArriveAction setParticipant(Property\Participant $participant)
 * @method ArriveAction setResult(Property\Result $result)
 * @method ArriveAction setStartTime(Property\StartTime $startTime)
 * @method ArriveAction setTarget(Property\Target $target)
 * @method ArriveAction setToLocation(Property\ToLocation $toLocation)
 */
class ArriveAction extends MoveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArriveAction';
	}
}