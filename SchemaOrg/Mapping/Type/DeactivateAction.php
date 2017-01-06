<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeactivateAction.
 * 
 * @method DeactivateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DeactivateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DeactivateAction setAgent(Property\Agent $agent)
 * @method DeactivateAction setAlternateName(Property\AlternateName $alternateName)
 * @method DeactivateAction setDescription(Property\Description $description)
 * @method DeactivateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DeactivateAction setEndTime(Property\EndTime $endTime)
 * @method DeactivateAction setError(Property\Error $error)
 * @method DeactivateAction setImage(Property\Image $image)
 * @method DeactivateAction setInstrument(Property\Instrument $instrument)
 * @method DeactivateAction setLocation(Property\Location $location)
 * @method DeactivateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DeactivateAction setName(Property\Name $name)
 * @method DeactivateAction setObject(Property\Object $object)
 * @method DeactivateAction setParticipant(Property\Participant $participant)
 * @method DeactivateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DeactivateAction setResult(Property\Result $result)
 * @method DeactivateAction setSameAs(Property\SameAs $sameAs)
 * @method DeactivateAction setStartTime(Property\StartTime $startTime)
 * @method DeactivateAction setTarget(Property\Target $target)
 * @method DeactivateAction setUrl(Property\Url $url)
 */
class DeactivateAction extends ControlAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeactivateAction';
	}
}