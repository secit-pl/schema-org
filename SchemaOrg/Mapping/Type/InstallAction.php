<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InstallAction.
 * 
 * @method InstallAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InstallAction setAgent(Property\Agent $agent)
 * @method InstallAction setEndTime(Property\EndTime $endTime)
 * @method InstallAction setError(Property\Error $error)
 * @method InstallAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method InstallAction setInstrument(Property\Instrument $instrument)
 * @method InstallAction setLocation(Property\Location $location)
 * @method InstallAction setObject(Property\Object $object)
 * @method InstallAction setParticipant(Property\Participant $participant)
 * @method InstallAction setResult(Property\Result $result)
 * @method InstallAction setStartTime(Property\StartTime $startTime)
 * @method InstallAction setTarget(Property\Target $target)
 */
class InstallAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InstallAction';
	}
}