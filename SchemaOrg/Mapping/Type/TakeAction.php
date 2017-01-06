<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TakeAction.
 * 
 * @method TakeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TakeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TakeAction setAgent(Property\Agent $agent)
 * @method TakeAction setAlternateName(Property\AlternateName $alternateName)
 * @method TakeAction setDescription(Property\Description $description)
 * @method TakeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TakeAction setEndTime(Property\EndTime $endTime)
 * @method TakeAction setError(Property\Error $error)
 * @method TakeAction setFromLocation(Property\FromLocation $fromLocation)
 * @method TakeAction setImage(Property\Image $image)
 * @method TakeAction setInstrument(Property\Instrument $instrument)
 * @method TakeAction setLocation(Property\Location $location)
 * @method TakeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TakeAction setName(Property\Name $name)
 * @method TakeAction setObject(Property\Object $object)
 * @method TakeAction setParticipant(Property\Participant $participant)
 * @method TakeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TakeAction setResult(Property\Result $result)
 * @method TakeAction setSameAs(Property\SameAs $sameAs)
 * @method TakeAction setStartTime(Property\StartTime $startTime)
 * @method TakeAction setTarget(Property\Target $target)
 * @method TakeAction setToLocation(Property\ToLocation $toLocation)
 * @method TakeAction setUrl(Property\Url $url)
 */
class TakeAction extends TransferAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TakeAction';
	}
}