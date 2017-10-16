<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrinkAction.
 * 
 * @method DrinkAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DrinkAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DrinkAction setAgent(Property\Agent $agent)
 * @method DrinkAction setAlternateName(Property\AlternateName $alternateName)
 * @method DrinkAction setDescription(Property\Description $description)
 * @method DrinkAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DrinkAction setEndTime(Property\EndTime $endTime)
 * @method DrinkAction setError(Property\Error $error)
 * @method DrinkAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method DrinkAction setIdentifier(Property\Identifier $identifier)
 * @method DrinkAction setImage(Property\Image $image)
 * @method DrinkAction setInstrument(Property\Instrument $instrument)
 * @method DrinkAction setLocation(Property\Location $location)
 * @method DrinkAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DrinkAction setName(Property\Name $name)
 * @method DrinkAction setObject(Property\Object $object)
 * @method DrinkAction setParticipant(Property\Participant $participant)
 * @method DrinkAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DrinkAction setResult(Property\Result $result)
 * @method DrinkAction setSameAs(Property\SameAs $sameAs)
 * @method DrinkAction setStartTime(Property\StartTime $startTime)
 * @method DrinkAction setTarget(Property\Target $target)
 * @method DrinkAction setUrl(Property\Url $url)
 */
class DrinkAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrinkAction';
	}
}