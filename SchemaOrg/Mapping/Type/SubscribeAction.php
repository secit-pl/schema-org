<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SubscribeAction.
 * 
 * @method SubscribeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SubscribeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method SubscribeAction setAgent(Property\Agent $agent)
 * @method SubscribeAction setAlternateName(Property\AlternateName $alternateName)
 * @method SubscribeAction setDescription(Property\Description $description)
 * @method SubscribeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SubscribeAction setEndTime(Property\EndTime $endTime)
 * @method SubscribeAction setError(Property\Error $error)
 * @method SubscribeAction setIdentifier(Property\Identifier $identifier)
 * @method SubscribeAction setImage(Property\Image $image)
 * @method SubscribeAction setInstrument(Property\Instrument $instrument)
 * @method SubscribeAction setLocation(Property\Location $location)
 * @method SubscribeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SubscribeAction setName(Property\Name $name)
 * @method SubscribeAction setObject(Property\Object $object)
 * @method SubscribeAction setParticipant(Property\Participant $participant)
 * @method SubscribeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SubscribeAction setResult(Property\Result $result)
 * @method SubscribeAction setSameAs(Property\SameAs $sameAs)
 * @method SubscribeAction setStartTime(Property\StartTime $startTime)
 * @method SubscribeAction setTarget(Property\Target $target)
 * @method SubscribeAction setUrl(Property\Url $url)
 */
class SubscribeAction extends InteractAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SubscribeAction';
	}
}