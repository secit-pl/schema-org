<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DisagreeAction.
 * 
 * @method DisagreeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DisagreeAction setAgent(Property\Agent $agent)
 * @method DisagreeAction setEndTime(Property\EndTime $endTime)
 * @method DisagreeAction setError(Property\Error $error)
 * @method DisagreeAction setInstrument(Property\Instrument $instrument)
 * @method DisagreeAction setLocation(Property\Location $location)
 * @method DisagreeAction setObject(Property\Object $object)
 * @method DisagreeAction setParticipant(Property\Participant $participant)
 * @method DisagreeAction setResult(Property\Result $result)
 * @method DisagreeAction setStartTime(Property\StartTime $startTime)
 * @method DisagreeAction setTarget(Property\Target $target)
 */
class DisagreeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DisagreeAction';
	}
}