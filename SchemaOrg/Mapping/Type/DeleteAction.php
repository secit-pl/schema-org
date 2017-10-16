<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeleteAction.
 * 
 * @method DeleteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DeleteAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DeleteAction setAgent(Property\Agent $agent)
 * @method DeleteAction setAlternateName(Property\AlternateName $alternateName)
 * @method DeleteAction setDescription(Property\Description $description)
 * @method DeleteAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DeleteAction setEndTime(Property\EndTime $endTime)
 * @method DeleteAction setError(Property\Error $error)
 * @method DeleteAction setIdentifier(Property\Identifier $identifier)
 * @method DeleteAction setImage(Property\Image $image)
 * @method DeleteAction setInstrument(Property\Instrument $instrument)
 * @method DeleteAction setLocation(Property\Location $location)
 * @method DeleteAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DeleteAction setName(Property\Name $name)
 * @method DeleteAction setObject(Property\Object $object)
 * @method DeleteAction setParticipant(Property\Participant $participant)
 * @method DeleteAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DeleteAction setResult(Property\Result $result)
 * @method DeleteAction setSameAs(Property\SameAs $sameAs)
 * @method DeleteAction setStartTime(Property\StartTime $startTime)
 * @method DeleteAction setTarget(Property\Target $target)
 * @method DeleteAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method DeleteAction setUrl(Property\Url $url)
 */
class DeleteAction extends UpdateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeleteAction';
	}
}