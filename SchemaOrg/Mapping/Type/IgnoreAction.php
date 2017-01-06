<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IgnoreAction.
 * 
 * @method IgnoreAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method IgnoreAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method IgnoreAction setAgent(Property\Agent $agent)
 * @method IgnoreAction setAlternateName(Property\AlternateName $alternateName)
 * @method IgnoreAction setDescription(Property\Description $description)
 * @method IgnoreAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method IgnoreAction setEndTime(Property\EndTime $endTime)
 * @method IgnoreAction setError(Property\Error $error)
 * @method IgnoreAction setImage(Property\Image $image)
 * @method IgnoreAction setInstrument(Property\Instrument $instrument)
 * @method IgnoreAction setLocation(Property\Location $location)
 * @method IgnoreAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method IgnoreAction setName(Property\Name $name)
 * @method IgnoreAction setObject(Property\Object $object)
 * @method IgnoreAction setParticipant(Property\Participant $participant)
 * @method IgnoreAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method IgnoreAction setResult(Property\Result $result)
 * @method IgnoreAction setSameAs(Property\SameAs $sameAs)
 * @method IgnoreAction setStartTime(Property\StartTime $startTime)
 * @method IgnoreAction setTarget(Property\Target $target)
 * @method IgnoreAction setUrl(Property\Url $url)
 */
class IgnoreAction extends AssessAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IgnoreAction';
	}
}