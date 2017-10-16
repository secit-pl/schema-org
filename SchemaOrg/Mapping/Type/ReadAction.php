<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReadAction.
 * 
 * @method ReadAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReadAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReadAction setAgent(Property\Agent $agent)
 * @method ReadAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReadAction setDescription(Property\Description $description)
 * @method ReadAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReadAction setEndTime(Property\EndTime $endTime)
 * @method ReadAction setError(Property\Error $error)
 * @method ReadAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method ReadAction setIdentifier(Property\Identifier $identifier)
 * @method ReadAction setImage(Property\Image $image)
 * @method ReadAction setInstrument(Property\Instrument $instrument)
 * @method ReadAction setLocation(Property\Location $location)
 * @method ReadAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReadAction setName(Property\Name $name)
 * @method ReadAction setObject(Property\Object $object)
 * @method ReadAction setParticipant(Property\Participant $participant)
 * @method ReadAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReadAction setResult(Property\Result $result)
 * @method ReadAction setSameAs(Property\SameAs $sameAs)
 * @method ReadAction setStartTime(Property\StartTime $startTime)
 * @method ReadAction setTarget(Property\Target $target)
 * @method ReadAction setUrl(Property\Url $url)
 */
class ReadAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReadAction';
	}
}