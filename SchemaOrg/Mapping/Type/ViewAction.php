<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ViewAction.
 * 
 * @method ViewAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ViewAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ViewAction setAgent(Property\Agent $agent)
 * @method ViewAction setAlternateName(Property\AlternateName $alternateName)
 * @method ViewAction setDescription(Property\Description $description)
 * @method ViewAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ViewAction setEndTime(Property\EndTime $endTime)
 * @method ViewAction setError(Property\Error $error)
 * @method ViewAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method ViewAction setImage(Property\Image $image)
 * @method ViewAction setInstrument(Property\Instrument $instrument)
 * @method ViewAction setLocation(Property\Location $location)
 * @method ViewAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ViewAction setName(Property\Name $name)
 * @method ViewAction setObject(Property\Object $object)
 * @method ViewAction setParticipant(Property\Participant $participant)
 * @method ViewAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ViewAction setResult(Property\Result $result)
 * @method ViewAction setSameAs(Property\SameAs $sameAs)
 * @method ViewAction setStartTime(Property\StartTime $startTime)
 * @method ViewAction setTarget(Property\Target $target)
 * @method ViewAction setUrl(Property\Url $url)
 */
class ViewAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ViewAction';
	}
}