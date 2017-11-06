<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ResumeAction.
 * 
 * @method ResumeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ResumeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ResumeAction setAgent(Property\Agent $agent)
 * @method ResumeAction setAlternateName(Property\AlternateName $alternateName)
 * @method ResumeAction setDescription(Property\Description $description)
 * @method ResumeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ResumeAction setEndTime(Property\EndTime $endTime)
 * @method ResumeAction setError(Property\Error $error)
 * @method ResumeAction setIdentifier(Property\Identifier $identifier)
 * @method ResumeAction setImage(Property\Image $image)
 * @method ResumeAction setInstrument(Property\Instrument $instrument)
 * @method ResumeAction setLocation(Property\Location $location)
 * @method ResumeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ResumeAction setName(Property\Name $name)
 * @method ResumeAction setObject(Property\Object $object)
 * @method ResumeAction setParticipant(Property\Participant $participant)
 * @method ResumeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ResumeAction setResult(Property\Result $result)
 * @method ResumeAction setSameAs(Property\SameAs $sameAs)
 * @method ResumeAction setStartTime(Property\StartTime $startTime)
 * @method ResumeAction setTarget(Property\Target $target)
 * @method ResumeAction setUrl(Property\Url $url)
 */
class ResumeAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ResumeAction';
	}
}