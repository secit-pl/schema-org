<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PhotographAction.
 * 
 * @method PhotographAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PhotographAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PhotographAction setAgent(Property\Agent $agent)
 * @method PhotographAction setAlternateName(Property\AlternateName $alternateName)
 * @method PhotographAction setDescription(Property\Description $description)
 * @method PhotographAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PhotographAction setEndTime(Property\EndTime $endTime)
 * @method PhotographAction setError(Property\Error $error)
 * @method PhotographAction setIdentifier(Property\Identifier $identifier)
 * @method PhotographAction setImage(Property\Image $image)
 * @method PhotographAction setInstrument(Property\Instrument $instrument)
 * @method PhotographAction setLocation(Property\Location $location)
 * @method PhotographAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PhotographAction setName(Property\Name $name)
 * @method PhotographAction setObject(Property\Object $object)
 * @method PhotographAction setParticipant(Property\Participant $participant)
 * @method PhotographAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PhotographAction setResult(Property\Result $result)
 * @method PhotographAction setSameAs(Property\SameAs $sameAs)
 * @method PhotographAction setStartTime(Property\StartTime $startTime)
 * @method PhotographAction setTarget(Property\Target $target)
 * @method PhotographAction setUrl(Property\Url $url)
 */
class PhotographAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhotographAction';
	}
}