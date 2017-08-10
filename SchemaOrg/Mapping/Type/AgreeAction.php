<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AgreeAction.
 * 
 * @method AgreeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AgreeAction setAgent(Property\Agent $agent)
 * @method AgreeAction setEndTime(Property\EndTime $endTime)
 * @method AgreeAction setError(Property\Error $error)
 * @method AgreeAction setInstrument(Property\Instrument $instrument)
 * @method AgreeAction setLocation(Property\Location $location)
 * @method AgreeAction setObject(Property\Object $object)
 * @method AgreeAction setParticipant(Property\Participant $participant)
 * @method AgreeAction setResult(Property\Result $result)
 * @method AgreeAction setStartTime(Property\StartTime $startTime)
 * @method AgreeAction setTarget(Property\Target $target)
 */
class AgreeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AgreeAction';
	}
}