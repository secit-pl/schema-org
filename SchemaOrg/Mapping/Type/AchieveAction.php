<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AchieveAction.
 * 
 * @method AchieveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AchieveAction setAgent(Property\Agent $agent)
 * @method AchieveAction setEndTime(Property\EndTime $endTime)
 * @method AchieveAction setError(Property\Error $error)
 * @method AchieveAction setInstrument(Property\Instrument $instrument)
 * @method AchieveAction setLocation(Property\Location $location)
 * @method AchieveAction setObject(Property\Object $object)
 * @method AchieveAction setParticipant(Property\Participant $participant)
 * @method AchieveAction setResult(Property\Result $result)
 * @method AchieveAction setStartTime(Property\StartTime $startTime)
 * @method AchieveAction setTarget(Property\Target $target)
 */
class AchieveAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AchieveAction';
	}
}