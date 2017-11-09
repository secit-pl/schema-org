<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ArriveAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ArriveActionType instead.
 * 
 * @method ArriveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ArriveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ArriveAction setAgent(Property\Agent $agent)
 * @method ArriveAction setAlternateName(Property\AlternateName $alternateName)
 * @method ArriveAction setDescription(Property\Description $description)
 * @method ArriveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ArriveAction setEndTime(Property\EndTime $endTime)
 * @method ArriveAction setError(Property\Error $error)
 * @method ArriveAction setFromLocation(Property\FromLocation $fromLocation)
 * @method ArriveAction setIdentifier(Property\Identifier $identifier)
 * @method ArriveAction setImage(Property\Image $image)
 * @method ArriveAction setInstrument(Property\Instrument $instrument)
 * @method ArriveAction setLocation(Property\Location $location)
 * @method ArriveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ArriveAction setName(Property\Name $name)
 * @method ArriveAction setObject(Property\Object $object)
 * @method ArriveAction setParticipant(Property\Participant $participant)
 * @method ArriveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ArriveAction setResult(Property\Result $result)
 * @method ArriveAction setSameAs(Property\SameAs $sameAs)
 * @method ArriveAction setStartTime(Property\StartTime $startTime)
 * @method ArriveAction setTarget(Property\Target $target)
 * @method ArriveAction setToLocation(Property\ToLocation $toLocation)
 * @method ArriveAction setUrl(Property\Url $url)
 */
class ArriveAction extends MoveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArriveAction';
	}
}