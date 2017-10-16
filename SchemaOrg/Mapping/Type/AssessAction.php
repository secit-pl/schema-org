<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AssessAction.
 * 
 * @method AssessAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AssessAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AssessAction setAgent(Property\Agent $agent)
 * @method AssessAction setAlternateName(Property\AlternateName $alternateName)
 * @method AssessAction setDescription(Property\Description $description)
 * @method AssessAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AssessAction setEndTime(Property\EndTime $endTime)
 * @method AssessAction setError(Property\Error $error)
 * @method AssessAction setIdentifier(Property\Identifier $identifier)
 * @method AssessAction setImage(Property\Image $image)
 * @method AssessAction setInstrument(Property\Instrument $instrument)
 * @method AssessAction setLocation(Property\Location $location)
 * @method AssessAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AssessAction setName(Property\Name $name)
 * @method AssessAction setObject(Property\Object $object)
 * @method AssessAction setParticipant(Property\Participant $participant)
 * @method AssessAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AssessAction setResult(Property\Result $result)
 * @method AssessAction setSameAs(Property\SameAs $sameAs)
 * @method AssessAction setStartTime(Property\StartTime $startTime)
 * @method AssessAction setTarget(Property\Target $target)
 * @method AssessAction setUrl(Property\Url $url)
 */
class AssessAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AssessAction';
	}
}