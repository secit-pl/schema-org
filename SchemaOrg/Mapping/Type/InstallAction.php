<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InstallAction.
 * 
 * @method InstallAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InstallAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method InstallAction setAgent(Property\Agent $agent)
 * @method InstallAction setAlternateName(Property\AlternateName $alternateName)
 * @method InstallAction setDescription(Property\Description $description)
 * @method InstallAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InstallAction setEndTime(Property\EndTime $endTime)
 * @method InstallAction setError(Property\Error $error)
 * @method InstallAction setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf)
 * @method InstallAction setImage(Property\Image $image)
 * @method InstallAction setInstrument(Property\Instrument $instrument)
 * @method InstallAction setLocation(Property\Location $location)
 * @method InstallAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InstallAction setName(Property\Name $name)
 * @method InstallAction setObject(Property\Object $object)
 * @method InstallAction setParticipant(Property\Participant $participant)
 * @method InstallAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InstallAction setResult(Property\Result $result)
 * @method InstallAction setSameAs(Property\SameAs $sameAs)
 * @method InstallAction setStartTime(Property\StartTime $startTime)
 * @method InstallAction setTarget(Property\Target $target)
 * @method InstallAction setUrl(Property\Url $url)
 */
class InstallAction extends ConsumeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InstallAction';
	}
}