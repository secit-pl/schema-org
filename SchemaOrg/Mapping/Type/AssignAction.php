<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AssignAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AssignActionType instead.
 * 
 * @method AssignAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AssignAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AssignAction setAgent(Property\Agent $agent)
 * @method AssignAction setAlternateName(Property\AlternateName $alternateName)
 * @method AssignAction setDescription(Property\Description $description)
 * @method AssignAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AssignAction setEndTime(Property\EndTime $endTime)
 * @method AssignAction setError(Property\Error $error)
 * @method AssignAction setIdentifier(Property\Identifier $identifier)
 * @method AssignAction setImage(Property\Image $image)
 * @method AssignAction setInstrument(Property\Instrument $instrument)
 * @method AssignAction setLocation(Property\Location $location)
 * @method AssignAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AssignAction setName(Property\Name $name)
 * @method AssignAction setObject(Property\Object $object)
 * @method AssignAction setParticipant(Property\Participant $participant)
 * @method AssignAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AssignAction setResult(Property\Result $result)
 * @method AssignAction setSameAs(Property\SameAs $sameAs)
 * @method AssignAction setStartTime(Property\StartTime $startTime)
 * @method AssignAction setTarget(Property\Target $target)
 * @method AssignAction setUrl(Property\Url $url)
 */
class AssignAction extends AllocateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AssignAction';
	}
}