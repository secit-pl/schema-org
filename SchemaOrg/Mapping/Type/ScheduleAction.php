<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScheduleAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ScheduleActionType instead.
 * 
 * @method ScheduleAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ScheduleAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ScheduleAction setAgent(Property\Agent $agent)
 * @method ScheduleAction setAlternateName(Property\AlternateName $alternateName)
 * @method ScheduleAction setDescription(Property\Description $description)
 * @method ScheduleAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ScheduleAction setEndTime(Property\EndTime $endTime)
 * @method ScheduleAction setError(Property\Error $error)
 * @method ScheduleAction setIdentifier(Property\Identifier $identifier)
 * @method ScheduleAction setImage(Property\Image $image)
 * @method ScheduleAction setInstrument(Property\Instrument $instrument)
 * @method ScheduleAction setLocation(Property\Location $location)
 * @method ScheduleAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ScheduleAction setName(Property\Name $name)
 * @method ScheduleAction setObject(Property\Object $object)
 * @method ScheduleAction setParticipant(Property\Participant $participant)
 * @method ScheduleAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ScheduleAction setResult(Property\Result $result)
 * @method ScheduleAction setSameAs(Property\SameAs $sameAs)
 * @method ScheduleAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 * @method ScheduleAction setStartTime(Property\StartTime $startTime)
 * @method ScheduleAction setTarget(Property\Target $target)
 * @method ScheduleAction setUrl(Property\Url $url)
 */
class ScheduleAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScheduleAction';
	}
}