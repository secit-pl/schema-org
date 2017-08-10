<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PhotographAction.
 * 
 * @method PhotographAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PhotographAction setAgent(Property\Agent $agent)
 * @method PhotographAction setEndTime(Property\EndTime $endTime)
 * @method PhotographAction setError(Property\Error $error)
 * @method PhotographAction setInstrument(Property\Instrument $instrument)
 * @method PhotographAction setLocation(Property\Location $location)
 * @method PhotographAction setObject(Property\Object $object)
 * @method PhotographAction setParticipant(Property\Participant $participant)
 * @method PhotographAction setResult(Property\Result $result)
 * @method PhotographAction setStartTime(Property\StartTime $startTime)
 * @method PhotographAction setTarget(Property\Target $target)
 */
class PhotographAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhotographAction';
	}
}