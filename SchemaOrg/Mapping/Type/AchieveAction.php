<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AchieveAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AchieveActionType instead.
 * 
 * @method AchieveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AchieveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AchieveAction setAgent(Property\Agent $agent)
 * @method AchieveAction setAlternateName(Property\AlternateName $alternateName)
 * @method AchieveAction setDescription(Property\Description $description)
 * @method AchieveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AchieveAction setEndTime(Property\EndTime $endTime)
 * @method AchieveAction setError(Property\Error $error)
 * @method AchieveAction setIdentifier(Property\Identifier $identifier)
 * @method AchieveAction setImage(Property\Image $image)
 * @method AchieveAction setInstrument(Property\Instrument $instrument)
 * @method AchieveAction setLocation(Property\Location $location)
 * @method AchieveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AchieveAction setName(Property\Name $name)
 * @method AchieveAction setObject(Property\Object $object)
 * @method AchieveAction setParticipant(Property\Participant $participant)
 * @method AchieveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AchieveAction setResult(Property\Result $result)
 * @method AchieveAction setSameAs(Property\SameAs $sameAs)
 * @method AchieveAction setStartTime(Property\StartTime $startTime)
 * @method AchieveAction setTarget(Property\Target $target)
 * @method AchieveAction setUrl(Property\Url $url)
 */
class AchieveAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AchieveAction';
	}
}