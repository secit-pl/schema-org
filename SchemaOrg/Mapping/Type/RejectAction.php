<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RejectAction.
 * 
 * @method RejectAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method RejectAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method RejectAction setAgent(Property\Agent $agent)
 * @method RejectAction setAlternateName(Property\AlternateName $alternateName)
 * @method RejectAction setDescription(Property\Description $description)
 * @method RejectAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RejectAction setEndTime(Property\EndTime $endTime)
 * @method RejectAction setError(Property\Error $error)
 * @method RejectAction setImage(Property\Image $image)
 * @method RejectAction setInstrument(Property\Instrument $instrument)
 * @method RejectAction setLocation(Property\Location $location)
 * @method RejectAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RejectAction setName(Property\Name $name)
 * @method RejectAction setObject(Property\Object $object)
 * @method RejectAction setParticipant(Property\Participant $participant)
 * @method RejectAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RejectAction setResult(Property\Result $result)
 * @method RejectAction setSameAs(Property\SameAs $sameAs)
 * @method RejectAction setStartTime(Property\StartTime $startTime)
 * @method RejectAction setTarget(Property\Target $target)
 * @method RejectAction setUrl(Property\Url $url)
 */
class RejectAction extends AllocateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RejectAction';
	}
}