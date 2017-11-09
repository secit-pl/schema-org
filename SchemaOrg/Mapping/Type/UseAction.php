<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UseAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\UseActionType instead.
 * 
 * @method UseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method UseAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method UseAction setAgent(Property\Agent $agent)
 * @method UseAction setAlternateName(Property\AlternateName $alternateName)
 * @method UseAction setDescription(Property\Description $description)
 * @method UseAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method UseAction setEndTime(Property\EndTime $endTime)
 * @method UseAction setError(Property\Error $error)
 * @method UseAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method UseAction setIdentifier(Property\Identifier $identifier)
 * @method UseAction setImage(Property\Image $image)
 * @method UseAction setInstrument(Property\Instrument $instrument)
 * @method UseAction setLocation(Property\Location $location)
 * @method UseAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method UseAction setName(Property\Name $name)
 * @method UseAction setObject(Property\Object $object)
 * @method UseAction setParticipant(Property\Participant $participant)
 * @method UseAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method UseAction setResult(Property\Result $result)
 * @method UseAction setSameAs(Property\SameAs $sameAs)
 * @method UseAction setStartTime(Property\StartTime $startTime)
 * @method UseAction setTarget(Property\Target $target)
 * @method UseAction setUrl(Property\Url $url)
 */
class UseAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UseAction';
	}
}