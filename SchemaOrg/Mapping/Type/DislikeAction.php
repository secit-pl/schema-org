<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DislikeAction.
 * 
 * @method DislikeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DislikeAction setAgent(Property\Agent $agent)
 * @method DislikeAction setEndTime(Property\EndTime $endTime)
 * @method DislikeAction setError(Property\Error $error)
 * @method DislikeAction setInstrument(Property\Instrument $instrument)
 * @method DislikeAction setLocation(Property\Location $location)
 * @method DislikeAction setObject(Property\Object $object)
 * @method DislikeAction setParticipant(Property\Participant $participant)
 * @method DislikeAction setResult(Property\Result $result)
 * @method DislikeAction setStartTime(Property\StartTime $startTime)
 * @method DislikeAction setTarget(Property\Target $target)
 */
class DislikeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DislikeAction';
	}
}