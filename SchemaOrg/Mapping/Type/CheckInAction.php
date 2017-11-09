<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckInAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CheckInActionType instead.
 * 
 * @method CheckInAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CheckInAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CheckInAction setAgent(Property\Agent $agent)
 * @method CheckInAction setAlternateName(Property\AlternateName $alternateName)
 * @method CheckInAction setDescription(Property\Description $description)
 * @method CheckInAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CheckInAction setEndTime(Property\EndTime $endTime)
 * @method CheckInAction setError(Property\Error $error)
 * @method CheckInAction setIdentifier(Property\Identifier $identifier)
 * @method CheckInAction setImage(Property\Image $image)
 * @method CheckInAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CheckInAction setInstrument(Property\Instrument $instrument)
 * @method CheckInAction setLocation(Property\Location $location)
 * @method CheckInAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CheckInAction setName(Property\Name $name)
 * @method CheckInAction setObject(Property\Object $object)
 * @method CheckInAction setParticipant(Property\Participant $participant)
 * @method CheckInAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CheckInAction setRecipient(Property\Recipient $recipient)
 * @method CheckInAction setResult(Property\Result $result)
 * @method CheckInAction setSameAs(Property\SameAs $sameAs)
 * @method CheckInAction setStartTime(Property\StartTime $startTime)
 * @method CheckInAction setTarget(Property\Target $target)
 * @method CheckInAction setUrl(Property\Url $url)
 */
class CheckInAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckInAction';
	}
}