<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ControlAction.
 * 
 * @method ControlAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ControlAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ControlAction setAgent(Property\Agent $agent)
 * @method ControlAction setAlternateName(Property\AlternateName $alternateName)
 * @method ControlAction setDescription(Property\Description $description)
 * @method ControlAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ControlAction setEndTime(Property\EndTime $endTime)
 * @method ControlAction setError(Property\Error $error)
 * @method ControlAction setIdentifier(Property\Identifier $identifier)
 * @method ControlAction setImage(Property\Image $image)
 * @method ControlAction setInstrument(Property\Instrument $instrument)
 * @method ControlAction setLocation(Property\Location $location)
 * @method ControlAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ControlAction setName(Property\Name $name)
 * @method ControlAction setObject(Property\Object $object)
 * @method ControlAction setParticipant(Property\Participant $participant)
 * @method ControlAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ControlAction setResult(Property\Result $result)
 * @method ControlAction setSameAs(Property\SameAs $sameAs)
 * @method ControlAction setStartTime(Property\StartTime $startTime)
 * @method ControlAction setTarget(Property\Target $target)
 * @method ControlAction setUrl(Property\Url $url)
 */
class ControlAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ControlAction';
	}
}