<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ListenAction.
 * 
 * @method ListenAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ListenAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ListenAction setAgent(Property\Agent $agent)
 * @method ListenAction setAlternateName(Property\AlternateName $alternateName)
 * @method ListenAction setDescription(Property\Description $description)
 * @method ListenAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ListenAction setEndTime(Property\EndTime $endTime)
 * @method ListenAction setError(Property\Error $error)
 * @method ListenAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method ListenAction setIdentifier(Property\Identifier $identifier)
 * @method ListenAction setImage(Property\Image $image)
 * @method ListenAction setInstrument(Property\Instrument $instrument)
 * @method ListenAction setLocation(Property\Location $location)
 * @method ListenAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ListenAction setName(Property\Name $name)
 * @method ListenAction setObject(Property\Object $object)
 * @method ListenAction setParticipant(Property\Participant $participant)
 * @method ListenAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ListenAction setResult(Property\Result $result)
 * @method ListenAction setSameAs(Property\SameAs $sameAs)
 * @method ListenAction setStartTime(Property\StartTime $startTime)
 * @method ListenAction setTarget(Property\Target $target)
 * @method ListenAction setUrl(Property\Url $url)
 */
class ListenAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ListenAction';
	}
}