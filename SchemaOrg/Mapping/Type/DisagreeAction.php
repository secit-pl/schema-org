<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DisagreeAction.
 * 
 * @method DisagreeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DisagreeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DisagreeAction setAgent(Property\Agent $agent)
 * @method DisagreeAction setAlternateName(Property\AlternateName $alternateName)
 * @method DisagreeAction setDescription(Property\Description $description)
 * @method DisagreeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DisagreeAction setEndTime(Property\EndTime $endTime)
 * @method DisagreeAction setError(Property\Error $error)
 * @method DisagreeAction setImage(Property\Image $image)
 * @method DisagreeAction setInstrument(Property\Instrument $instrument)
 * @method DisagreeAction setLocation(Property\Location $location)
 * @method DisagreeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DisagreeAction setName(Property\Name $name)
 * @method DisagreeAction setObject(Property\Object $object)
 * @method DisagreeAction setParticipant(Property\Participant $participant)
 * @method DisagreeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DisagreeAction setResult(Property\Result $result)
 * @method DisagreeAction setSameAs(Property\SameAs $sameAs)
 * @method DisagreeAction setStartTime(Property\StartTime $startTime)
 * @method DisagreeAction setTarget(Property\Target $target)
 * @method DisagreeAction setUrl(Property\Url $url)
 */
class DisagreeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DisagreeAction';
	}
}