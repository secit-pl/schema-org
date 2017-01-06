<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AgreeAction.
 * 
 * @method AgreeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AgreeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AgreeAction setAgent(Property\Agent $agent)
 * @method AgreeAction setAlternateName(Property\AlternateName $alternateName)
 * @method AgreeAction setDescription(Property\Description $description)
 * @method AgreeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AgreeAction setEndTime(Property\EndTime $endTime)
 * @method AgreeAction setError(Property\Error $error)
 * @method AgreeAction setImage(Property\Image $image)
 * @method AgreeAction setInstrument(Property\Instrument $instrument)
 * @method AgreeAction setLocation(Property\Location $location)
 * @method AgreeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AgreeAction setName(Property\Name $name)
 * @method AgreeAction setObject(Property\Object $object)
 * @method AgreeAction setParticipant(Property\Participant $participant)
 * @method AgreeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AgreeAction setResult(Property\Result $result)
 * @method AgreeAction setSameAs(Property\SameAs $sameAs)
 * @method AgreeAction setStartTime(Property\StartTime $startTime)
 * @method AgreeAction setTarget(Property\Target $target)
 * @method AgreeAction setUrl(Property\Url $url)
 */
class AgreeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AgreeAction';
	}
}