<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UnRegisterAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\UnRegisterActionType instead.
 * 
 * @method UnRegisterAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method UnRegisterAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method UnRegisterAction setAgent(Property\Agent $agent)
 * @method UnRegisterAction setAlternateName(Property\AlternateName $alternateName)
 * @method UnRegisterAction setDescription(Property\Description $description)
 * @method UnRegisterAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method UnRegisterAction setEndTime(Property\EndTime $endTime)
 * @method UnRegisterAction setError(Property\Error $error)
 * @method UnRegisterAction setIdentifier(Property\Identifier $identifier)
 * @method UnRegisterAction setImage(Property\Image $image)
 * @method UnRegisterAction setInstrument(Property\Instrument $instrument)
 * @method UnRegisterAction setLocation(Property\Location $location)
 * @method UnRegisterAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method UnRegisterAction setName(Property\Name $name)
 * @method UnRegisterAction setObject(Property\Object $object)
 * @method UnRegisterAction setParticipant(Property\Participant $participant)
 * @method UnRegisterAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method UnRegisterAction setResult(Property\Result $result)
 * @method UnRegisterAction setSameAs(Property\SameAs $sameAs)
 * @method UnRegisterAction setStartTime(Property\StartTime $startTime)
 * @method UnRegisterAction setTarget(Property\Target $target)
 * @method UnRegisterAction setUrl(Property\Url $url)
 */
class UnRegisterAction extends InteractAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UnRegisterAction';
	}
}