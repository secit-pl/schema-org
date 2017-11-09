<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InviteActionType.
 * 
 * @method InviteActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method InviteActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InviteActionType setAgent(Property\AgentProperty $agent)
 * @method InviteActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InviteActionType setDescription(Property\DescriptionProperty $description)
 * @method InviteActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InviteActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method InviteActionType setError(Property\ErrorProperty $error)
 * @method InviteActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InviteActionType setImage(Property\ImageProperty $image)
 * @method InviteActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method InviteActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method InviteActionType setLocation(Property\LocationProperty $location)
 * @method InviteActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InviteActionType setName(Property\NameProperty $name)
 * @method InviteActionType setObject(Property\ObjectProperty $object)
 * @method InviteActionType setParticipant(Property\ParticipantProperty $participant)
 * @method InviteActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InviteActionType setRecipient(Property\RecipientProperty $recipient)
 * @method InviteActionType setResult(Property\ResultProperty $result)
 * @method InviteActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method InviteActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method InviteActionType setTarget(Property\TargetProperty $target)
 * @method InviteActionType setUrl(Property\UrlProperty $url)
 */
class InviteActionType extends CommunicateActionType {

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * Get event.
	 * 
	 * @return Property\EventProperty
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
	 * @param Property\EventProperty $event
	 * @return InviteActionType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}
}