<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AddAction.
 * 
 * @method AddAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AddAction setAgent(Property\Agent $agent)
 * @method AddAction setEndTime(Property\EndTime $endTime)
 * @method AddAction setError(Property\Error $error)
 * @method AddAction setInstrument(Property\Instrument $instrument)
 * @method AddAction setLocation(Property\Location $location)
 * @method AddAction setObject(Property\Object $object)
 * @method AddAction setParticipant(Property\Participant $participant)
 * @method AddAction setResult(Property\Result $result)
 * @method AddAction setStartTime(Property\StartTime $startTime)
 * @method AddAction setTarget(Property\Target $target)
 * @method AddAction setTargetCollection(Property\TargetCollection $targetCollection)
 */
class AddAction extends UpdateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AddAction';
	}
}