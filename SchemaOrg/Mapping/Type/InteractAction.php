<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InteractAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InteractActionType instead.
 * 
 * @method InteractAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InteractAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method InteractAction setAgent(Property\Agent $agent)
 * @method InteractAction setAlternateName(Property\AlternateName $alternateName)
 * @method InteractAction setDescription(Property\Description $description)
 * @method InteractAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InteractAction setEndTime(Property\EndTime $endTime)
 * @method InteractAction setError(Property\Error $error)
 * @method InteractAction setIdentifier(Property\Identifier $identifier)
 * @method InteractAction setImage(Property\Image $image)
 * @method InteractAction setInstrument(Property\Instrument $instrument)
 * @method InteractAction setLocation(Property\Location $location)
 * @method InteractAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InteractAction setName(Property\Name $name)
 * @method InteractAction setObject(Property\Object $object)
 * @method InteractAction setParticipant(Property\Participant $participant)
 * @method InteractAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InteractAction setResult(Property\Result $result)
 * @method InteractAction setSameAs(Property\SameAs $sameAs)
 * @method InteractAction setStartTime(Property\StartTime $startTime)
 * @method InteractAction setTarget(Property\Target $target)
 * @method InteractAction setUrl(Property\Url $url)
 */
class InteractAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InteractAction';
	}
}