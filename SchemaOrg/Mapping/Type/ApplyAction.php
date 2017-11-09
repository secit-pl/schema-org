<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ApplyAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ApplyActionType instead.
 * 
 * @method ApplyAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ApplyAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ApplyAction setAgent(Property\Agent $agent)
 * @method ApplyAction setAlternateName(Property\AlternateName $alternateName)
 * @method ApplyAction setDescription(Property\Description $description)
 * @method ApplyAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ApplyAction setEndTime(Property\EndTime $endTime)
 * @method ApplyAction setError(Property\Error $error)
 * @method ApplyAction setIdentifier(Property\Identifier $identifier)
 * @method ApplyAction setImage(Property\Image $image)
 * @method ApplyAction setInstrument(Property\Instrument $instrument)
 * @method ApplyAction setLocation(Property\Location $location)
 * @method ApplyAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ApplyAction setName(Property\Name $name)
 * @method ApplyAction setObject(Property\Object $object)
 * @method ApplyAction setParticipant(Property\Participant $participant)
 * @method ApplyAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ApplyAction setResult(Property\Result $result)
 * @method ApplyAction setSameAs(Property\SameAs $sameAs)
 * @method ApplyAction setStartTime(Property\StartTime $startTime)
 * @method ApplyAction setTarget(Property\Target $target)
 * @method ApplyAction setUrl(Property\Url $url)
 */
class ApplyAction extends OrganizeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApplyAction';
	}
}