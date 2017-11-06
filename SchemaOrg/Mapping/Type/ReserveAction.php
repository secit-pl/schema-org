<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReserveAction.
 * 
 * @method ReserveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReserveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReserveAction setAgent(Property\Agent $agent)
 * @method ReserveAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReserveAction setDescription(Property\Description $description)
 * @method ReserveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReserveAction setEndTime(Property\EndTime $endTime)
 * @method ReserveAction setError(Property\Error $error)
 * @method ReserveAction setIdentifier(Property\Identifier $identifier)
 * @method ReserveAction setImage(Property\Image $image)
 * @method ReserveAction setInstrument(Property\Instrument $instrument)
 * @method ReserveAction setLocation(Property\Location $location)
 * @method ReserveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReserveAction setName(Property\Name $name)
 * @method ReserveAction setObject(Property\Object $object)
 * @method ReserveAction setParticipant(Property\Participant $participant)
 * @method ReserveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReserveAction setResult(Property\Result $result)
 * @method ReserveAction setSameAs(Property\SameAs $sameAs)
 * @method ReserveAction setScheduledTime(Property\ScheduledTime $scheduledTime)
 * @method ReserveAction setStartTime(Property\StartTime $startTime)
 * @method ReserveAction setTarget(Property\Target $target)
 * @method ReserveAction setUrl(Property\Url $url)
 */
class ReserveAction extends PlanAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReserveAction';
	}
}