<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WatchAction.
 * 
 * @method WatchAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WatchAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method WatchAction setAgent(Property\Agent $agent)
 * @method WatchAction setAlternateName(Property\AlternateName $alternateName)
 * @method WatchAction setDescription(Property\Description $description)
 * @method WatchAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WatchAction setEndTime(Property\EndTime $endTime)
 * @method WatchAction setError(Property\Error $error)
 * @method WatchAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method WatchAction setIdentifier(Property\Identifier $identifier)
 * @method WatchAction setImage(Property\Image $image)
 * @method WatchAction setInstrument(Property\Instrument $instrument)
 * @method WatchAction setLocation(Property\Location $location)
 * @method WatchAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WatchAction setName(Property\Name $name)
 * @method WatchAction setObject(Property\Object $object)
 * @method WatchAction setParticipant(Property\Participant $participant)
 * @method WatchAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WatchAction setResult(Property\Result $result)
 * @method WatchAction setSameAs(Property\SameAs $sameAs)
 * @method WatchAction setStartTime(Property\StartTime $startTime)
 * @method WatchAction setTarget(Property\Target $target)
 * @method WatchAction setUrl(Property\Url $url)
 */
class WatchAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WatchAction';
	}
}