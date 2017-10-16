<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RsvpAction.
 * 
 * @method RsvpAction setEvent(Property\Event $event)
 * @method RsvpAction setInLanguage(Property\InLanguage $inLanguage)
 * @method RsvpAction setRecipient(Property\Recipient $recipient)
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