<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckOutAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CheckOutActionType instead.
 * 
 * @method CheckOutAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CheckOutAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CheckOutAction setAgent(Property\Agent $agent)
 * @method CheckOutAction setAlternateName(Property\AlternateName $alternateName)
 * @method CheckOutAction setDescription(Property\Description $description)
 * @method CheckOutAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CheckOutAction setEndTime(Property\EndTime $endTime)
 * @method CheckOutAction setError(Property\Error $error)
 * @method CheckOutAction setIdentifier(Property\Identifier $identifier)
 * @method CheckOutAction setImage(Property\Image $image)
 * @method CheckOutAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CheckOutAction setInstrument(Property\Instrument $instrument)
 * @method CheckOutAction setLocation(Property\Location $location)
 * @method CheckOutAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CheckOutAction setName(Property\Name $name)
 * @method CheckOutAction setObject(Property\Object $object)
 * @method CheckOutAction setParticipant(Property\Participant $participant)
 * @method CheckOutAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CheckOutAction setRecipient(Property\Recipient $recipient)
 * @method CheckOutAction setResult(Property\Result $result)
 * @method CheckOutAction setSameAs(Property\SameAs $sameAs)
 * @method CheckOutAction setStartTime(Property\StartTime $startTime)
 * @method CheckOutAction setTarget(Property\Target $target)
 * @method CheckOutAction setUrl(Property\Url $url)
 */
class CheckOutAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckOutAction';
	}
}