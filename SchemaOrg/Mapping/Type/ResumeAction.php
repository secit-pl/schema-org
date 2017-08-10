<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ResumeAction.
 * 
 * @method ResumeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ResumeAction setAgent(Property\Agent $agent)
 * @method ResumeAction setEndTime(Property\EndTime $endTime)
 * @method ResumeAction setError(Property\Error $error)
 * @method ResumeAction setInstrument(Property\Instrument $instrument)
 * @method ResumeAction setLocation(Property\Location $location)
 * @method ResumeAction setObject(Property\Object $object)
 * @method ResumeAction setParticipant(Property\Participant $participant)
 * @method ResumeAction setResult(Property\Result $result)
 * @method ResumeAction setStartTime(Property\StartTime $startTime)
 * @method ResumeAction setTarget(Property\Target $target)
 */
class ResumeAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ResumeAction';
	}
}