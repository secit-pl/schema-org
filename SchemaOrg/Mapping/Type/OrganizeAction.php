<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrganizeAction.
 * 
 * @method OrganizeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method OrganizeAction setAgent(Property\Agent $agent)
 * @method OrganizeAction setEndTime(Property\EndTime $endTime)
 * @method OrganizeAction setError(Property\Error $error)
 * @method OrganizeAction setInstrument(Property\Instrument $instrument)
 * @method OrganizeAction setLocation(Property\Location $location)
 * @method OrganizeAction setObject(Property\Object $object)
 * @method OrganizeAction setParticipant(Property\Participant $participant)
 * @method OrganizeAction setResult(Property\Result $result)
 * @method OrganizeAction setStartTime(Property\StartTime $startTime)
 * @method OrganizeAction setTarget(Property\Target $target)
 */
class OrganizeAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrganizeAction';
	}
}