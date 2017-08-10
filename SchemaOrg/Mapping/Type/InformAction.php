<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InformAction.
 * 
 * @method InformAction setAbout(Property\About $about)
 * @method InformAction setInLanguage(Property\InLanguage $inLanguage)
 * @method InformAction setRecipient(Property\Recipient $recipient)
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