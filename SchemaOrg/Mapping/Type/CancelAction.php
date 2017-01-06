<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CancelAction.
 * 
 * @method CancelAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CancelAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CancelAction setAgent(Property\Agent $agent)
 * @method CancelAction setAlternateName(Property\AlternateName $alternateName)
 * @method CancelAction setDescription(Property\Description $description)
 * @method CancelAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CancelAction setEndTime(Property\EndTime $endTime)
 * @method CancelAction setError(Property\Error $error)
 * @method CancelAction setImage(Property\Image $image)
 * @method CancelAction setInstrument(Property\Instrument $instrument)
 * @method CancelAction setLocation(Property\Location $location)
 * @method CancelAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CancelAction setName(Property\Name $name)
 * @method CancelAction setObject(Property\Object $object)
 * @method CancelAction setParticipant(Property\Participant $participant)
 * @method CancelAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CancelAction setResult(Property\Result $result)
 * @method CancelAction setSameAs(Property\SameAs $sameAs)
 * @method CancelAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 * @method CancelAction setStartTime(Property\StartTime $startTime)
 * @method CancelAction setTarget(Property\Target $target)
 * @method CancelAction setUrl(Property\Url $url)
 */
class CancelAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CancelAction';
	}
}