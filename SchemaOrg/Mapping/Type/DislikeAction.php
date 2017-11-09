<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DislikeAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DislikeActionType instead.
 * 
 * @method DislikeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DislikeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DislikeAction setAgent(Property\Agent $agent)
 * @method DislikeAction setAlternateName(Property\AlternateName $alternateName)
 * @method DislikeAction setDescription(Property\Description $description)
 * @method DislikeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DislikeAction setEndTime(Property\EndTime $endTime)
 * @method DislikeAction setError(Property\Error $error)
 * @method DislikeAction setIdentifier(Property\Identifier $identifier)
 * @method DislikeAction setImage(Property\Image $image)
 * @method DislikeAction setInstrument(Property\Instrument $instrument)
 * @method DislikeAction setLocation(Property\Location $location)
 * @method DislikeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DislikeAction setName(Property\Name $name)
 * @method DislikeAction setObject(Property\Object $object)
 * @method DislikeAction setParticipant(Property\Participant $participant)
 * @method DislikeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DislikeAction setResult(Property\Result $result)
 * @method DislikeAction setSameAs(Property\SameAs $sameAs)
 * @method DislikeAction setStartTime(Property\StartTime $startTime)
 * @method DislikeAction setTarget(Property\Target $target)
 * @method DislikeAction setUrl(Property\Url $url)
 */
class DislikeAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DislikeAction';
	}
}