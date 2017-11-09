<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InformAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InformActionType instead.
 * 
 * @method InformAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InformAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method InformAction setAgent(Property\Agent $agent)
 * @method InformAction setAlternateName(Property\AlternateName $alternateName)
 * @method InformAction setDescription(Property\Description $description)
 * @method InformAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InformAction setEndTime(Property\EndTime $endTime)
 * @method InformAction setError(Property\Error $error)
 * @method InformAction setIdentifier(Property\Identifier $identifier)
 * @method InformAction setImage(Property\Image $image)
 * @method InformAction setInLanguage(Property\InLanguage $inLanguage)
 * @method InformAction setInstrument(Property\Instrument $instrument)
 * @method InformAction setLocation(Property\Location $location)
 * @method InformAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InformAction setName(Property\Name $name)
 * @method InformAction setObject(Property\Object $object)
 * @method InformAction setParticipant(Property\Participant $participant)
 * @method InformAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InformAction setRecipient(Property\Recipient $recipient)
 * @method InformAction setResult(Property\Result $result)
 * @method InformAction setSameAs(Property\SameAs $sameAs)
 * @method InformAction setStartTime(Property\StartTime $startTime)
 * @method InformAction setTarget(Property\Target $target)
 * @method InformAction setUrl(Property\Url $url)
 */
class InformAction extends CommunicateAction {

	/**
	 * @var Property\Event
	 */
	private $event;

	/**
	 * Get event.
	 * 
	 * @return Property\Event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InformAction';
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return InformAction
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}
}