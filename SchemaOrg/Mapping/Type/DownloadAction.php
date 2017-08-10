<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DownloadAction.
 * 
 * @method DownloadAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DownloadAction setAgent(Property\Agent $agent)
 * @method DownloadAction setEndTime(Property\EndTime $endTime)
 * @method DownloadAction setError(Property\Error $error)
 * @method DownloadAction setFromLocation(Property\FromLocation $fromLocation)
 * @method DownloadAction setInstrument(Property\Instrument $instrument)
 * @method DownloadAction setLocation(Property\Location $location)
 * @method DownloadAction setObject(Property\Object $object)
 * @method DownloadAction setParticipant(Property\Participant $participant)
 * @method DownloadAction setResult(Property\Result $result)
 * @method DownloadAction setStartTime(Property\StartTime $startTime)
 * @method DownloadAction setTarget(Property\Target $target)
 * @method DownloadAction setToLocation(Property\ToLocation $toLocation)
 */
class DownloadAction extends TransferAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DownloadAction';
	}
}