<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReactAction.
 * 
 * @method ReactAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReactAction setAgent(Property\Agent $agent)
 * @method ReactAction setEndTime(Property\EndTime $endTime)
 * @method ReactAction setError(Property\Error $error)
 * @method ReactAction setInstrument(Property\Instrument $instrument)
 * @method ReactAction setLocation(Property\Location $location)
 * @method ReactAction setObject(Property\Object $object)
 * @method ReactAction setParticipant(Property\Participant $participant)
 * @method ReactAction setResult(Property\Result $result)
 * @method ReactAction setStartTime(Property\StartTime $startTime)
 * @method ReactAction setTarget(Property\Target $target)
 */
class ReactAction extends AssessAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReactAction';
	}
}