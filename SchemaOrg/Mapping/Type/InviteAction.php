<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InviteAction.
 * 
 * @method InviteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InviteAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method InviteAction setAgent(Property\Agent $agent)
 * @method InviteAction setAlternateName(Property\AlternateName $alternateName)
 * @method InviteAction setDescription(Property\Description $description)
 * @method InviteAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InviteAction setEndTime(Property\EndTime $endTime)
 * @method InviteAction setError(Property\Error $error)
 * @method InviteAction setIdentifier(Property\Identifier $identifier)
 * @method InviteAction setImage(Property\Image $image)
 * @method InviteAction setInLanguage(Property\InLanguage $inLanguage)
 * @method InviteAction setInstrument(Property\Instrument $instrument)
 * @method InviteAction setLocation(Property\Location $location)
 * @method InviteAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InviteAction setName(Property\Name $name)
 * @method InviteAction setObject(Property\Object $object)
 * @method InviteAction setParticipant(Property\Participant $participant)
 * @method InviteAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InviteAction setRecipient(Property\Recipient $recipient)
 * @method InviteAction setResult(Property\Result $result)
 * @method InviteAction setSameAs(Property\SameAs $sameAs)
 * @method InviteAction setStartTime(Property\StartTime $startTime)
 * @method InviteAction setTarget(Property\Target $target)
 * @method InviteAction setUrl(Property\Url $url)
 */
class InviteAction extends CommunicateAction {

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
		return 'https://schema.org/InviteAction';
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return InviteAction
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}
}