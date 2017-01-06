<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckAction.
 * 
 * @method CheckAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CheckAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CheckAction setAgent(Property\Agent $agent)
 * @method CheckAction setAlternateName(Property\AlternateName $alternateName)
 * @method CheckAction setDescription(Property\Description $description)
 * @method CheckAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CheckAction setEndTime(Property\EndTime $endTime)
 * @method CheckAction setError(Property\Error $error)
 * @method CheckAction setImage(Property\Image $image)
 * @method CheckAction setInstrument(Property\Instrument $instrument)
 * @method CheckAction setLocation(Property\Location $location)
 * @method CheckAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CheckAction setName(Property\Name $name)
 * @method CheckAction setObject(Property\Object $object)
 * @method CheckAction setParticipant(Property\Participant $participant)
 * @method CheckAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CheckAction setResult(Property\Result $result)
 * @method CheckAction setSameAs(Property\SameAs $sameAs)
 * @method CheckAction setStartTime(Property\StartTime $startTime)
 * @method CheckAction setTarget(Property\Target $target)
 * @method CheckAction setUrl(Property\Url $url)
 */
class CheckAction extends FindAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckAction';
	}
}