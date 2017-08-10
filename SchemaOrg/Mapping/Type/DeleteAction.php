<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeleteAction.
 * 
 * @method DeleteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DeleteAction setAgent(Property\Agent $agent)
 * @method DeleteAction setEndTime(Property\EndTime $endTime)
 * @method DeleteAction setError(Property\Error $error)
 * @method DeleteAction setInstrument(Property\Instrument $instrument)
 * @method DeleteAction setLocation(Property\Location $location)
 * @method DeleteAction setObject(Property\Object $object)
 * @method DeleteAction setParticipant(Property\Participant $participant)
 * @method DeleteAction setResult(Property\Result $result)
 * @method DeleteAction setStartTime(Property\StartTime $startTime)
 * @method DeleteAction setTarget(Property\Target $target)
 * @method DeleteAction setTargetCollection(Property\TargetCollection $targetCollection)
 */
class DeleteAction extends UpdateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeleteAction';
	}
}