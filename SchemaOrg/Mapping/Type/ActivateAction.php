<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActivateAction.
 * 
 * @method ActivateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ActivateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ActivateAction setAgent(Property\Agent $agent)
 * @method ActivateAction setAlternateName(Property\AlternateName $alternateName)
 * @method ActivateAction setDescription(Property\Description $description)
 * @method ActivateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ActivateAction setEndTime(Property\EndTime $endTime)
 * @method ActivateAction setError(Property\Error $error)
 * @method ActivateAction setImage(Property\Image $image)
 * @method ActivateAction setInstrument(Property\Instrument $instrument)
 * @method ActivateAction setLocation(Property\Location $location)
 * @method ActivateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ActivateAction setName(Property\Name $name)
 * @method ActivateAction setObject(Property\Object $object)
 * @method ActivateAction setParticipant(Property\Participant $participant)
 * @method ActivateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ActivateAction setResult(Property\Result $result)
 * @method ActivateAction setSameAs(Property\SameAs $sameAs)
 * @method ActivateAction setStartTime(Property\StartTime $startTime)
 * @method ActivateAction setTarget(Property\Target $target)
 * @method ActivateAction setUrl(Property\Url $url)
 */
class ActivateAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActivateAction';
	}
}