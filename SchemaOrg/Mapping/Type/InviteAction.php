<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InviteAction.
 * 
 * @method InviteAction setInLanguage(Property\InLanguage $inLanguage)
 * @method InviteAction setRecipient(Property\Recipient $recipient)
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