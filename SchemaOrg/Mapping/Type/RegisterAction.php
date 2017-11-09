<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RegisterAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RegisterActionType instead.
 * 
 * @method RegisterAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method RegisterAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method RegisterAction setAgent(Property\Agent $agent)
 * @method RegisterAction setAlternateName(Property\AlternateName $alternateName)
 * @method RegisterAction setDescription(Property\Description $description)
 * @method RegisterAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RegisterAction setEndTime(Property\EndTime $endTime)
 * @method RegisterAction setError(Property\Error $error)
 * @method RegisterAction setIdentifier(Property\Identifier $identifier)
 * @method RegisterAction setImage(Property\Image $image)
 * @method RegisterAction setInstrument(Property\Instrument $instrument)
 * @method RegisterAction setLocation(Property\Location $location)
 * @method RegisterAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RegisterAction setName(Property\Name $name)
 * @method RegisterAction setObject(Property\Object $object)
 * @method RegisterAction setParticipant(Property\Participant $participant)
 * @method RegisterAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RegisterAction setResult(Property\Result $result)
 * @method RegisterAction setSameAs(Property\SameAs $sameAs)
 * @method RegisterAction setStartTime(Property\StartTime $startTime)
 * @method RegisterAction setTarget(Property\Target $target)
 * @method RegisterAction setUrl(Property\Url $url)
 */
class RegisterAction extends InteractAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RegisterAction';
	}
}