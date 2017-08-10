<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookmarkAction.
 * 
 * @method BookmarkAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BookmarkAction setAgent(Property\Agent $agent)
 * @method BookmarkAction setEndTime(Property\EndTime $endTime)
 * @method BookmarkAction setError(Property\Error $error)
 * @method BookmarkAction setInstrument(Property\Instrument $instrument)
 * @method BookmarkAction setLocation(Property\Location $location)
 * @method BookmarkAction setObject(Property\Object $object)
 * @method BookmarkAction setParticipant(Property\Participant $participant)
 * @method BookmarkAction setResult(Property\Result $result)
 * @method BookmarkAction setStartTime(Property\StartTime $startTime)
 * @method BookmarkAction setTarget(Property\Target $target)
 */
class BookmarkAction extends OrganizeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookmarkAction';
	}
}