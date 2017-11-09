<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AcceptAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AcceptActionType instead.
 * 
 * @method AcceptAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AcceptAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AcceptAction setAgent(Property\Agent $agent)
 * @method AcceptAction setAlternateName(Property\AlternateName $alternateName)
 * @method AcceptAction setDescription(Property\Description $description)
 * @method AcceptAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AcceptAction setEndTime(Property\EndTime $endTime)
 * @method AcceptAction setError(Property\Error $error)
 * @method AcceptAction setIdentifier(Property\Identifier $identifier)
 * @method AcceptAction setImage(Property\Image $image)
 * @method AcceptAction setInstrument(Property\Instrument $instrument)
 * @method AcceptAction setLocation(Property\Location $location)
 * @method AcceptAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AcceptAction setName(Property\Name $name)
 * @method AcceptAction setObject(Property\Object $object)
 * @method AcceptAction setParticipant(Property\Participant $participant)
 * @method AcceptAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AcceptAction setResult(Property\Result $result)
 * @method AcceptAction setSameAs(Property\SameAs $sameAs)
 * @method AcceptAction setStartTime(Property\StartTime $startTime)
 * @method AcceptAction setTarget(Property\Target $target)
 * @method AcceptAction setUrl(Property\Url $url)
 */
class AcceptAction extends AllocateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AcceptAction';
	}
}