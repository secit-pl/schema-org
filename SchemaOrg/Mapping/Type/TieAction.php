<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TieAction.
 * 
 * @method TieAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TieAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TieAction setAgent(Property\Agent $agent)
 * @method TieAction setAlternateName(Property\AlternateName $alternateName)
 * @method TieAction setDescription(Property\Description $description)
 * @method TieAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TieAction setEndTime(Property\EndTime $endTime)
 * @method TieAction setError(Property\Error $error)
 * @method TieAction setIdentifier(Property\Identifier $identifier)
 * @method TieAction setImage(Property\Image $image)
 * @method TieAction setInstrument(Property\Instrument $instrument)
 * @method TieAction setLocation(Property\Location $location)
 * @method TieAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TieAction setName(Property\Name $name)
 * @method TieAction setObject(Property\Object $object)
 * @method TieAction setParticipant(Property\Participant $participant)
 * @method TieAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TieAction setResult(Property\Result $result)
 * @method TieAction setSameAs(Property\SameAs $sameAs)
 * @method TieAction setStartTime(Property\StartTime $startTime)
 * @method TieAction setTarget(Property\Target $target)
 * @method TieAction setUrl(Property\Url $url)
 */
class TieAction extends AchieveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TieAction';
	}
}