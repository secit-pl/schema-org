<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TieAction.
 * 
 * @method TieAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TieAction setAgent(Property\Agent $agent)
 * @method TieAction setEndTime(Property\EndTime $endTime)
 * @method TieAction setError(Property\Error $error)
 * @method TieAction setInstrument(Property\Instrument $instrument)
 * @method TieAction setLocation(Property\Location $location)
 * @method TieAction setObject(Property\Object $object)
 * @method TieAction setParticipant(Property\Participant $participant)
 * @method TieAction setResult(Property\Result $result)
 * @method TieAction setStartTime(Property\StartTime $startTime)
 * @method TieAction setTarget(Property\Target $target)
 */
class TieAction extends AchieveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TieAction';
	}
}