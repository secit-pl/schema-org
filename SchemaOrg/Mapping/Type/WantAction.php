<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WantAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\WantActionType instead.
 * 
 * @method WantAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WantAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method WantAction setAgent(Property\Agent $agent)
 * @method WantAction setAlternateName(Property\AlternateName $alternateName)
 * @method WantAction setDescription(Property\Description $description)
 * @method WantAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WantAction setEndTime(Property\EndTime $endTime)
 * @method WantAction setError(Property\Error $error)
 * @method WantAction setIdentifier(Property\Identifier $identifier)
 * @method WantAction setImage(Property\Image $image)
 * @method WantAction setInstrument(Property\Instrument $instrument)
 * @method WantAction setLocation(Property\Location $location)
 * @method WantAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WantAction setName(Property\Name $name)
 * @method WantAction setObject(Property\Object $object)
 * @method WantAction setParticipant(Property\Participant $participant)
 * @method WantAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WantAction setResult(Property\Result $result)
 * @method WantAction setSameAs(Property\SameAs $sameAs)
 * @method WantAction setStartTime(Property\StartTime $startTime)
 * @method WantAction setTarget(Property\Target $target)
 * @method WantAction setUrl(Property\Url $url)
 */
class WantAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WantAction';
	}
}