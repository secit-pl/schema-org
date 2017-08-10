<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WatchAction.
 * 
 * @method WatchAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WatchAction setAgent(Property\Agent $agent)
 * @method WatchAction setEndTime(Property\EndTime $endTime)
 * @method WatchAction setError(Property\Error $error)
 * @method WatchAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method WatchAction setInstrument(Property\Instrument $instrument)
 * @method WatchAction setLocation(Property\Location $location)
 * @method WatchAction setObject(Property\Object $object)
 * @method WatchAction setParticipant(Property\Participant $participant)
 * @method WatchAction setResult(Property\Result $result)
 * @method WatchAction setStartTime(Property\StartTime $startTime)
 * @method WatchAction setTarget(Property\Target $target)
 */
class WatchAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WatchAction';
	}
}