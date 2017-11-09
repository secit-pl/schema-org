<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LikeAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LikeActionType instead.
 * 
 * @method LikeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LikeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method LikeAction setAgent(Property\Agent $agent)
 * @method LikeAction setAlternateName(Property\AlternateName $alternateName)
 * @method LikeAction setDescription(Property\Description $description)
 * @method LikeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LikeAction setEndTime(Property\EndTime $endTime)
 * @method LikeAction setError(Property\Error $error)
 * @method LikeAction setIdentifier(Property\Identifier $identifier)
 * @method LikeAction setImage(Property\Image $image)
 * @method LikeAction setInstrument(Property\Instrument $instrument)
 * @method LikeAction setLocation(Property\Location $location)
 * @method LikeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LikeAction setName(Property\Name $name)
 * @method LikeAction setObject(Property\Object $object)
 * @method LikeAction setParticipant(Property\Participant $participant)
 * @method LikeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LikeAction setResult(Property\Result $result)
 * @method LikeAction setSameAs(Property\SameAs $sameAs)
 * @method LikeAction setStartTime(Property\StartTime $startTime)
 * @method LikeAction setTarget(Property\Target $target)
 * @method LikeAction setUrl(Property\Url $url)
 */
class LikeAction extends ReactAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LikeAction';
	}
}