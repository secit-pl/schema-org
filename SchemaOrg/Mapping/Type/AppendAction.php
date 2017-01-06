<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AppendAction.
 * 
 * @method AppendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AppendAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AppendAction setAgent(Property\Agent $agent)
 * @method AppendAction setAlternateName(Property\AlternateName $alternateName)
 * @method AppendAction setDescription(Property\Description $description)
 * @method AppendAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AppendAction setEndTime(Property\EndTime $endTime)
 * @method AppendAction setError(Property\Error $error)
 * @method AppendAction setImage(Property\Image $image)
 * @method AppendAction setInstrument(Property\Instrument $instrument)
 * @method AppendAction setLocation(Property\Location $location)
 * @method AppendAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AppendAction setName(Property\Name $name)
 * @method AppendAction setObject(Property\Object $object)
 * @method AppendAction setParticipant(Property\Participant $participant)
 * @method AppendAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AppendAction setResult(Property\Result $result)
 * @method AppendAction setSameAs(Property\SameAs $sameAs)
 * @method AppendAction setStartTime(Property\StartTime $startTime)
 * @method AppendAction setTarget(Property\Target $target)
 * @method AppendAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method AppendAction setToLocation(Property\ToLocation $toLocation)
 * @method AppendAction setUrl(Property\Url $url)
 */
class AppendAction extends InsertAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AppendAction';
	}
}