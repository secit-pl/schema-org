<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrganizeAction.
 * 
 * @method OrganizeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method OrganizeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrganizeAction setAgent(Property\Agent $agent)
 * @method OrganizeAction setAlternateName(Property\AlternateName $alternateName)
 * @method OrganizeAction setDescription(Property\Description $description)
 * @method OrganizeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrganizeAction setEndTime(Property\EndTime $endTime)
 * @method OrganizeAction setError(Property\Error $error)
 * @method OrganizeAction setIdentifier(Property\Identifier $identifier)
 * @method OrganizeAction setImage(Property\Image $image)
 * @method OrganizeAction setInstrument(Property\Instrument $instrument)
 * @method OrganizeAction setLocation(Property\Location $location)
 * @method OrganizeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrganizeAction setName(Property\Name $name)
 * @method OrganizeAction setObject(Property\Object $object)
 * @method OrganizeAction setParticipant(Property\Participant $participant)
 * @method OrganizeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrganizeAction setResult(Property\Result $result)
 * @method OrganizeAction setSameAs(Property\SameAs $sameAs)
 * @method OrganizeAction setStartTime(Property\StartTime $startTime)
 * @method OrganizeAction setTarget(Property\Target $target)
 * @method OrganizeAction setUrl(Property\Url $url)
 */
class OrganizeAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrganizeAction';
	}
}