<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AddAction.
 * 
 * @method AddAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AddAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AddAction setAgent(Property\Agent $agent)
 * @method AddAction setAlternateName(Property\AlternateName $alternateName)
 * @method AddAction setDescription(Property\Description $description)
 * @method AddAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AddAction setEndTime(Property\EndTime $endTime)
 * @method AddAction setError(Property\Error $error)
 * @method AddAction setImage(Property\Image $image)
 * @method AddAction setInstrument(Property\Instrument $instrument)
 * @method AddAction setLocation(Property\Location $location)
 * @method AddAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AddAction setName(Property\Name $name)
 * @method AddAction setObject(Property\Object $object)
 * @method AddAction setParticipant(Property\Participant $participant)
 * @method AddAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AddAction setResult(Property\Result $result)
 * @method AddAction setSameAs(Property\SameAs $sameAs)
 * @method AddAction setStartTime(Property\StartTime $startTime)
 * @method AddAction setTarget(Property\Target $target)
 * @method AddAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method AddAction setUrl(Property\Url $url)
 */
class AddAction extends UpdateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AddAction';
	}
}