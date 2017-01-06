<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConfirmAction.
 * 
 * @method ConfirmAction setAbout(Property\About $about)
 * @method ConfirmAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ConfirmAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ConfirmAction setAgent(Property\Agent $agent)
 * @method ConfirmAction setAlternateName(Property\AlternateName $alternateName)
 * @method ConfirmAction setDescription(Property\Description $description)
 * @method ConfirmAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ConfirmAction setEndTime(Property\EndTime $endTime)
 * @method ConfirmAction setError(Property\Error $error)
 * @method ConfirmAction setEvent(Property\Event $event)
 * @method ConfirmAction setImage(Property\Image $image)
 * @method ConfirmAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ConfirmAction setInstrument(Property\Instrument $instrument)
 * @method ConfirmAction setLocation(Property\Location $location)
 * @method ConfirmAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ConfirmAction setName(Property\Name $name)
 * @method ConfirmAction setObject(Property\Object $object)
 * @method ConfirmAction setParticipant(Property\Participant $participant)
 * @method ConfirmAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ConfirmAction setRecipient(Property\Recipient $recipient)
 * @method ConfirmAction setResult(Property\Result $result)
 * @method ConfirmAction setSameAs(Property\SameAs $sameAs)
 * @method ConfirmAction setStartTime(Property\StartTime $startTime)
 * @method ConfirmAction setTarget(Property\Target $target)
 * @method ConfirmAction setUrl(Property\Url $url)
 */
class ConfirmAction extends InformAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConfirmAction';
	}
}