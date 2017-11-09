<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreateAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CreateActionType instead.
 * 
 * @method CreateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CreateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CreateAction setAgent(Property\Agent $agent)
 * @method CreateAction setAlternateName(Property\AlternateName $alternateName)
 * @method CreateAction setDescription(Property\Description $description)
 * @method CreateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CreateAction setEndTime(Property\EndTime $endTime)
 * @method CreateAction setError(Property\Error $error)
 * @method CreateAction setIdentifier(Property\Identifier $identifier)
 * @method CreateAction setImage(Property\Image $image)
 * @method CreateAction setInstrument(Property\Instrument $instrument)
 * @method CreateAction setLocation(Property\Location $location)
 * @method CreateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CreateAction setName(Property\Name $name)
 * @method CreateAction setObject(Property\Object $object)
 * @method CreateAction setParticipant(Property\Participant $participant)
 * @method CreateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CreateAction setResult(Property\Result $result)
 * @method CreateAction setSameAs(Property\SameAs $sameAs)
 * @method CreateAction setStartTime(Property\StartTime $startTime)
 * @method CreateAction setTarget(Property\Target $target)
 * @method CreateAction setUrl(Property\Url $url)
 */
class CreateAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreateAction';
	}
}