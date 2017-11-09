<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpActionType.
 * 
 * @method RsvpActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method RsvpActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RsvpActionType setAgent(Property\AgentProperty $agent)
 * @method RsvpActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RsvpActionType setDescription(Property\DescriptionProperty $description)
 * @method RsvpActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RsvpActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method RsvpActionType setError(Property\ErrorProperty $error)
 * @method RsvpActionType setEvent(Property\EventProperty $event)
 * @method RsvpActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RsvpActionType setImage(Property\ImageProperty $image)
 * @method RsvpActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method RsvpActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method RsvpActionType setLocation(Property\LocationProperty $location)
 * @method RsvpActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RsvpActionType setName(Property\NameProperty $name)
 * @method RsvpActionType setObject(Property\ObjectProperty $object)
 * @method RsvpActionType setParticipant(Property\ParticipantProperty $participant)
 * @method RsvpActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RsvpActionType setRecipient(Property\RecipientProperty $recipient)
 * @method RsvpActionType setResult(Property\ResultProperty $result)
 * @method RsvpActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method RsvpActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method RsvpActionType setTarget(Property\TargetProperty $target)
 * @method RsvpActionType setUrl(Property\UrlProperty $url)
 */
class RsvpActionType extends InformActionType {

	/**
	 * @var Property\AdditionalNumberOfGuestsProperty
	 */
	private $additionalNumberOfGuests;

	/**
	 * @var Property\CommentProperty
	 */
	private $comment;

	/**
	 * @var Property\RsvpResponseProperty
	 */
	private $rsvpResponse;

	/**
	 * Get additional number of guests.
	 * 
	 * @return Property\AdditionalNumberOfGuestsProperty
	 */
	public function getAdditionalNumberOfGuests() {
		return $this->additionalNumberOfGuests;
	}

	/**
	 * Get comment.
	 * 
	 * @return Property\CommentProperty
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Get rsvp response.
	 * 
	 * @return Property\RsvpResponseProperty
	 */
	public function getRsvpResponse() {
		return $this->rsvpResponse;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RsvpAction';
	}

	/**
	 * Set additional number of guests.
	 * 
	 * @param Property\AdditionalNumberOfGuestsProperty $additionalNumberOfGuests
	 * @return RsvpActionType
	 */
	public function setAdditionalNumberOfGuests(Property\AdditionalNumberOfGuestsProperty $additionalNumberOfGuests) {
		$this->additionalNumberOfGuests = $additionalNumberOfGuests;

		return $this;
	}

	/**
	 * Set comment.
	 * 
	 * @param Property\CommentProperty $comment
	 * @return RsvpActionType
	 */
	public function setComment(Property\CommentProperty $comment) {
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Set rsvp response.
	 * 
	 * @param Property\RsvpResponseProperty $rsvpResponse
	 * @return RsvpActionType
	 */
	public function setRsvpResponse(Property\RsvpResponseProperty $rsvpResponse) {
		$this->rsvpResponse = $rsvpResponse;

		return $this;
	}
}