<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AllocateAction.
 * 
 * @method AllocateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AllocateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AllocateAction setAgent(Property\Agent $agent)
 * @method AllocateAction setAlternateName(Property\AlternateName $alternateName)
 * @method AllocateAction setDescription(Property\Description $description)
 * @method AllocateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AllocateAction setEndTime(Property\EndTime $endTime)
 * @method AllocateAction setError(Property\Error $error)
 * @method AllocateAction setImage(Property\Image $image)
 * @method AllocateAction setInstrument(Property\Instrument $instrument)
 * @method AllocateAction setLocation(Property\Location $location)
 * @method AllocateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AllocateAction setName(Property\Name $name)
 * @method AllocateAction setObject(Property\Object $object)
 * @method AllocateAction setParticipant(Property\Participant $participant)
 * @method AllocateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AllocateAction setResult(Property\Result $result)
 * @method AllocateAction setSameAs(Property\SameAs $sameAs)
 * @method AllocateAction setStartTime(Property\StartTime $startTime)
 * @method AllocateAction setTarget(Property\Target $target)
 * @method AllocateAction setUrl(Property\Url $url)
 */
class AllocateAction extends OrganizeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AllocateAction';
	}
}