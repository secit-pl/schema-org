<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EatAction.
 * 
 * @method EatAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method EatAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method EatAction setAgent(Property\Agent $agent)
 * @method EatAction setAlternateName(Property\AlternateName $alternateName)
 * @method EatAction setDescription(Property\Description $description)
 * @method EatAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EatAction setEndTime(Property\EndTime $endTime)
 * @method EatAction setError(Property\Error $error)
 * @method EatAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method EatAction setIdentifier(Property\Identifier $identifier)
 * @method EatAction setImage(Property\Image $image)
 * @method EatAction setInstrument(Property\Instrument $instrument)
 * @method EatAction setLocation(Property\Location $location)
 * @method EatAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EatAction setName(Property\Name $name)
 * @method EatAction setObject(Property\Object $object)
 * @method EatAction setParticipant(Property\Participant $participant)
 * @method EatAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EatAction setResult(Property\Result $result)
 * @method EatAction setSameAs(Property\SameAs $sameAs)
 * @method EatAction setStartTime(Property\StartTime $startTime)
 * @method EatAction setTarget(Property\Target $target)
 * @method EatAction setUrl(Property\Url $url)
 */
class EatAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EatAction';
	}
}