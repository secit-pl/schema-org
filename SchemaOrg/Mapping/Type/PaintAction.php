<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaintAction.
 * 
 * @method PaintAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PaintAction setAgent(Property\Agent $agent)
 * @method PaintAction setEndTime(Property\EndTime $endTime)
 * @method PaintAction setError(Property\Error $error)
 * @method PaintAction setInstrument(Property\Instrument $instrument)
 * @method PaintAction setLocation(Property\Location $location)
 * @method PaintAction setObject(Property\Object $object)
 * @method PaintAction setParticipant(Property\Participant $participant)
 * @method PaintAction setResult(Property\Result $result)
 * @method PaintAction setStartTime(Property\StartTime $startTime)
 * @method PaintAction setTarget(Property\Target $target)
 */
class PaintAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaintAction';
	}
}