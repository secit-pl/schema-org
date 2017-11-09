<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RsvpActionType instead.
 * 
 * @method RsvpAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method RsvpAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method RsvpAction setAgent(Property\Agent $agent)
 * @method RsvpAction setAlternateName(Property\AlternateName $alternateName)
 * @method RsvpAction setDescription(Property\Description $description)
 * @method RsvpAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RsvpAction setEndTime(Property\EndTime $endTime)
 * @method RsvpAction setError(Property\Error $error)
 * @method RsvpAction setEvent(Property\Event $event)
 * @method RsvpAction setIdentifier(Property\Identifier $identifier)
 * @method RsvpAction setImage(Property\Image $image)
 * @method RsvpAction setInLanguage(Property\InLanguage $inLanguage)
 * @method RsvpAction setInstrument(Property\Instrument $instrument)
 * @method RsvpAction setLocation(Property\Location $location)
 * @method RsvpAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RsvpAction setName(Property\Name $name)
 * @method RsvpAction setObject(Property\Object $object)
 * @method RsvpAction setParticipant(Property\Participant $participant)
 * @method RsvpAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RsvpAction setRecipient(Property\Recipient $recipient)
 * @method RsvpAction setResult(Property\Result $result)
 * @method RsvpAction setSameAs(Property\SameAs $sameAs)
 * @method RsvpAction setStartTime(Property\StartTime $startTime)
 * @method RsvpAction setTarget(Property\Target $target)
 * @method RsvpAction setUrl(Property\Url $url)
 */
class RsvpAction extends InformAction {

	/**
	 * @var Property\AdditionalNumberOfGuests
	 */
	private $additionalNumberOfGuests;

	/**
	 * @var Property\Comment
	 */
	private $comment;

	/**
	 * @var Property\RsvpResponse
	 */
	private $rsvpResponse;

	/**
	 * Get additional number of guests.
	 * 
	 * @return Property\AdditionalNumberOfGuests
	 */
	public function getAdditionalNumberOfGuests() {
		return $this->additionalNumberOfGuests;
	}

	/**
	 * Get comment.
	 * 
	 * @return Property\Comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Get rsvp response.
	 * 
	 * @return Property\RsvpResponse
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
	 * @param Property\AdditionalNumberOfGuests $additionalNumberOfGuests
	 * @return RsvpAction
	 */
	public function setAdditionalNumberOfGuests(Property\AdditionalNumberOfGuests $additionalNumberOfGuests) {
		$this->additionalNumberOfGuests = $additionalNumberOfGuests;

		return $this;
	}

	/**
	 * Set comment.
	 * 
	 * @param Property\Comment $comment
	 * @return RsvpAction
	 */
	public function setComment(Property\Comment $comment) {
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Set rsvp response.
	 * 
	 * @param Property\RsvpResponse $rsvpResponse
	 * @return RsvpAction
	 */
	public function setRsvpResponse(Property\RsvpResponse $rsvpResponse) {
		$this->rsvpResponse = $rsvpResponse;

		return $this;
	}
}