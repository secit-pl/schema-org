<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DiscoverAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DiscoverActionType instead.
 * 
 * @method DiscoverAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DiscoverAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DiscoverAction setAgent(Property\Agent $agent)
 * @method DiscoverAction setAlternateName(Property\AlternateName $alternateName)
 * @method DiscoverAction setDescription(Property\Description $description)
 * @method DiscoverAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DiscoverAction setEndTime(Property\EndTime $endTime)
 * @method DiscoverAction setError(Property\Error $error)
 * @method DiscoverAction setIdentifier(Property\Identifier $identifier)
 * @method DiscoverAction setImage(Property\Image $image)
 * @method DiscoverAction setInstrument(Property\Instrument $instrument)
 * @method DiscoverAction setLocation(Property\Location $location)
 * @method DiscoverAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DiscoverAction setName(Property\Name $name)
 * @method DiscoverAction setObject(Property\Object $object)
 * @method DiscoverAction setParticipant(Property\Participant $participant)
 * @method DiscoverAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DiscoverAction setResult(Property\Result $result)
 * @method DiscoverAction setSameAs(Property\SameAs $sameAs)
 * @method DiscoverAction setStartTime(Property\StartTime $startTime)
 * @method DiscoverAction setTarget(Property\Target $target)
 * @method DiscoverAction setUrl(Property\Url $url)
 */
class DiscoverAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiscoverAction';
	}
}