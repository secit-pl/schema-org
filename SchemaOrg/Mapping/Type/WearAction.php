<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WearAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\WearActionType instead.
 * 
 * @method WearAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WearAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method WearAction setAgent(Property\Agent $agent)
 * @method WearAction setAlternateName(Property\AlternateName $alternateName)
 * @method WearAction setDescription(Property\Description $description)
 * @method WearAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WearAction setEndTime(Property\EndTime $endTime)
 * @method WearAction setError(Property\Error $error)
 * @method WearAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method WearAction setIdentifier(Property\Identifier $identifier)
 * @method WearAction setImage(Property\Image $image)
 * @method WearAction setInstrument(Property\Instrument $instrument)
 * @method WearAction setLocation(Property\Location $location)
 * @method WearAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WearAction setName(Property\Name $name)
 * @method WearAction setObject(Property\Object $object)
 * @method WearAction setParticipant(Property\Participant $participant)
 * @method WearAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WearAction setResult(Property\Result $result)
 * @method WearAction setSameAs(Property\SameAs $sameAs)
 * @method WearAction setStartTime(Property\StartTime $startTime)
 * @method WearAction setTarget(Property\Target $target)
 * @method WearAction setUrl(Property\Url $url)
 */
class WearAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WearAction';
	}
}