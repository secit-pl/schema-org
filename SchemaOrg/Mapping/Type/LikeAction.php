<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LikeAction.
 * 
 * @method LikeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LikeAction setAgent(Property\Agent $agent)
 * @method LikeAction setEndTime(Property\EndTime $endTime)
 * @method LikeAction setError(Property\Error $error)
 * @method LikeAction setInstrument(Property\Instrument $instrument)
 * @method LikeAction setLocation(Property\Location $location)
 * @method LikeAction setObject(Property\Object $object)
 * @method LikeAction setParticipant(Property\Participant $participant)
 * @method LikeAction setResult(Property\Result $result)
 * @method LikeAction setStartTime(Property\StartTime $startTime)
 * @method LikeAction setTarget(Property\Target $target)
 */
class LikeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LikeAction';
	}
}