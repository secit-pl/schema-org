<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepartAction.
 * 
 * @method DepartAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DepartAction setAgent(Property\Agent $agent)
 * @method DepartAction setEndTime(Property\EndTime $endTime)
 * @method DepartAction setError(Property\Error $error)
 * @method DepartAction setFromLocation(Property\FromLocation $fromLocation)
 * @method DepartAction setInstrument(Property\Instrument $instrument)
 * @method DepartAction setLocation(Property\Location $location)
 * @method DepartAction setObject(Property\Object $object)
 * @method DepartAction setParticipant(Property\Participant $participant)
 * @method DepartAction setResult(Property\Result $result)
 * @method DepartAction setStartTime(Property\StartTime $startTime)
 * @method DepartAction setTarget(Property\Target $target)
 * @method DepartAction setToLocation(Property\ToLocation $toLocation)
 */
class DepartAction extends MoveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartAction';
	}
}