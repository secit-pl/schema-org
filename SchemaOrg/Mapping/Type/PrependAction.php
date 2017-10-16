<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PrependAction.
 * 
 * @method PrependAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PrependAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PrependAction setAgent(Property\Agent $agent)
 * @method PrependAction setAlternateName(Property\AlternateName $alternateName)
 * @method PrependAction setDescription(Property\Description $description)
 * @method PrependAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PrependAction setEndTime(Property\EndTime $endTime)
 * @method PrependAction setError(Property\Error $error)
 * @method PrependAction setIdentifier(Property\Identifier $identifier)
 * @method PrependAction setImage(Property\Image $image)
 * @method PrependAction setInstrument(Property\Instrument $instrument)
 * @method PrependAction setLocation(Property\Location $location)
 * @method PrependAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PrependAction setName(Property\Name $name)
 * @method PrependAction setObject(Property\Object $object)
 * @method PrependAction setParticipant(Property\Participant $participant)
 * @method PrependAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PrependAction setResult(Property\Result $result)
 * @method PrependAction setSameAs(Property\SameAs $sameAs)
 * @method PrependAction setStartTime(Property\StartTime $startTime)
 * @method PrependAction setTarget(Property\Target $target)
 * @method PrependAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method PrependAction setToLocation(Property\ToLocation $toLocation)
 * @method PrependAction setUrl(Property\Url $url)
 */
class PrependAction extends InsertAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PrependAction';
	}
}