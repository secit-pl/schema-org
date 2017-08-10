<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FilmAction.
 * 
 * @method FilmAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method FilmAction setAgent(Property\Agent $agent)
 * @method FilmAction setEndTime(Property\EndTime $endTime)
 * @method FilmAction setError(Property\Error $error)
 * @method FilmAction setInstrument(Property\Instrument $instrument)
 * @method FilmAction setLocation(Property\Location $location)
 * @method FilmAction setObject(Property\Object $object)
 * @method FilmAction setParticipant(Property\Participant $participant)
 * @method FilmAction setResult(Property\Result $result)
 * @method FilmAction setStartTime(Property\StartTime $startTime)
 * @method FilmAction setTarget(Property\Target $target)
 */
class FilmAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FilmAction';
	}
}