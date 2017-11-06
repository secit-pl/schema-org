<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FindAction.
 * 
 * @method FindAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method FindAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method FindAction setAgent(Property\Agent $agent)
 * @method FindAction setAlternateName(Property\AlternateName $alternateName)
 * @method FindAction setDescription(Property\Description $description)
 * @method FindAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FindAction setEndTime(Property\EndTime $endTime)
 * @method FindAction setError(Property\Error $error)
 * @method FindAction setIdentifier(Property\Identifier $identifier)
 * @method FindAction setImage(Property\Image $image)
 * @method FindAction setInstrument(Property\Instrument $instrument)
 * @method FindAction setLocation(Property\Location $location)
 * @method FindAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FindAction setName(Property\Name $name)
 * @method FindAction setObject(Property\Object $object)
 * @method FindAction setParticipant(Property\Participant $participant)
 * @method FindAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FindAction setResult(Property\Result $result)
 * @method FindAction setSameAs(Property\SameAs $sameAs)
 * @method FindAction setStartTime(Property\StartTime $startTime)
 * @method FindAction setTarget(Property\Target $target)
 * @method FindAction setUrl(Property\Url $url)
 */
class FindAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FindAction';
	}
}