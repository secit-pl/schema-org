<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SuspendAction.
 * 
 * @method SuspendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SuspendAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method SuspendAction setAgent(Property\Agent $agent)
 * @method SuspendAction setAlternateName(Property\AlternateName $alternateName)
 * @method SuspendAction setDescription(Property\Description $description)
 * @method SuspendAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SuspendAction setEndTime(Property\EndTime $endTime)
 * @method SuspendAction setError(Property\Error $error)
 * @method SuspendAction setIdentifier(Property\Identifier $identifier)
 * @method SuspendAction setImage(Property\Image $image)
 * @method SuspendAction setInstrument(Property\Instrument $instrument)
 * @method SuspendAction setLocation(Property\Location $location)
 * @method SuspendAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SuspendAction setName(Property\Name $name)
 * @method SuspendAction setObject(Property\Object $object)
 * @method SuspendAction setParticipant(Property\Participant $participant)
 * @method SuspendAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SuspendAction setResult(Property\Result $result)
 * @method SuspendAction setSameAs(Property\SameAs $sameAs)
 * @method SuspendAction setStartTime(Property\StartTime $startTime)
 * @method SuspendAction setTarget(Property\Target $target)
 * @method SuspendAction setUrl(Property\Url $url)
 */
class SuspendAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SuspendAction';
	}
}