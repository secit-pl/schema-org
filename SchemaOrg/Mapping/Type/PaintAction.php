<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaintAction.
 * 
 * @method PaintAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PaintAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaintAction setAgent(Property\Agent $agent)
 * @method PaintAction setAlternateName(Property\AlternateName $alternateName)
 * @method PaintAction setDescription(Property\Description $description)
 * @method PaintAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaintAction setEndTime(Property\EndTime $endTime)
 * @method PaintAction setError(Property\Error $error)
 * @method PaintAction setIdentifier(Property\Identifier $identifier)
 * @method PaintAction setImage(Property\Image $image)
 * @method PaintAction setInstrument(Property\Instrument $instrument)
 * @method PaintAction setLocation(Property\Location $location)
 * @method PaintAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaintAction setName(Property\Name $name)
 * @method PaintAction setObject(Property\Object $object)
 * @method PaintAction setParticipant(Property\Participant $participant)
 * @method PaintAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaintAction setResult(Property\Result $result)
 * @method PaintAction setSameAs(Property\SameAs $sameAs)
 * @method PaintAction setStartTime(Property\StartTime $startTime)
 * @method PaintAction setTarget(Property\Target $target)
 * @method PaintAction setUrl(Property\Url $url)
 */
class PaintAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaintAction';
	}
}