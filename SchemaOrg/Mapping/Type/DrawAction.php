<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrawAction.
 * 
 * @method DrawAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DrawAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DrawAction setAgent(Property\Agent $agent)
 * @method DrawAction setAlternateName(Property\AlternateName $alternateName)
 * @method DrawAction setDescription(Property\Description $description)
 * @method DrawAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DrawAction setEndTime(Property\EndTime $endTime)
 * @method DrawAction setError(Property\Error $error)
 * @method DrawAction setIdentifier(Property\Identifier $identifier)
 * @method DrawAction setImage(Property\Image $image)
 * @method DrawAction setInstrument(Property\Instrument $instrument)
 * @method DrawAction setLocation(Property\Location $location)
 * @method DrawAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DrawAction setName(Property\Name $name)
 * @method DrawAction setObject(Property\Object $object)
 * @method DrawAction setParticipant(Property\Participant $participant)
 * @method DrawAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DrawAction setResult(Property\Result $result)
 * @method DrawAction setSameAs(Property\SameAs $sameAs)
 * @method DrawAction setStartTime(Property\StartTime $startTime)
 * @method DrawAction setTarget(Property\Target $target)
 * @method DrawAction setUrl(Property\Url $url)
 */
class DrawAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrawAction';
	}
}