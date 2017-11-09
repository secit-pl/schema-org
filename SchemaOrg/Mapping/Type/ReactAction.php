<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReactAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReactActionType instead.
 * 
 * @method ReactAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReactAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReactAction setAgent(Property\Agent $agent)
 * @method ReactAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReactAction setDescription(Property\Description $description)
 * @method ReactAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReactAction setEndTime(Property\EndTime $endTime)
 * @method ReactAction setError(Property\Error $error)
 * @method ReactAction setIdentifier(Property\Identifier $identifier)
 * @method ReactAction setImage(Property\Image $image)
 * @method ReactAction setInstrument(Property\Instrument $instrument)
 * @method ReactAction setLocation(Property\Location $location)
 * @method ReactAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReactAction setName(Property\Name $name)
 * @method ReactAction setObject(Property\Object $object)
 * @method ReactAction setParticipant(Property\Participant $participant)
 * @method ReactAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReactAction setResult(Property\Result $result)
 * @method ReactAction setSameAs(Property\SameAs $sameAs)
 * @method ReactAction setStartTime(Property\StartTime $startTime)
 * @method ReactAction setTarget(Property\Target $target)
 * @method ReactAction setUrl(Property\Url $url)
 */
class ReactAction extends AssessAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReactAction';
	}
}