<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BefriendAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BefriendActionType instead.
 * 
 * @method BefriendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BefriendAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method BefriendAction setAgent(Property\Agent $agent)
 * @method BefriendAction setAlternateName(Property\AlternateName $alternateName)
 * @method BefriendAction setDescription(Property\Description $description)
 * @method BefriendAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BefriendAction setEndTime(Property\EndTime $endTime)
 * @method BefriendAction setError(Property\Error $error)
 * @method BefriendAction setIdentifier(Property\Identifier $identifier)
 * @method BefriendAction setImage(Property\Image $image)
 * @method BefriendAction setInstrument(Property\Instrument $instrument)
 * @method BefriendAction setLocation(Property\Location $location)
 * @method BefriendAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BefriendAction setName(Property\Name $name)
 * @method BefriendAction setObject(Property\Object $object)
 * @method BefriendAction setParticipant(Property\Participant $participant)
 * @method BefriendAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BefriendAction setResult(Property\Result $result)
 * @method BefriendAction setSameAs(Property\SameAs $sameAs)
 * @method BefriendAction setStartTime(Property\StartTime $startTime)
 * @method BefriendAction setTarget(Property\Target $target)
 * @method BefriendAction setUrl(Property\Url $url)
 */
class BefriendAction extends InteractAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BefriendAction';
	}
}