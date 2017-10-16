<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommunicateAction.
 */
class CommunicateAction extends InteractAction {

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * Get in language.
	 * 
	 * @return Property\InLanguage
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get recipient.
	 * 
	 * @return Property\Recipient
	 */
	public function getRecipient() {
		return $this->recipient;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CommunicateAction';
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguage $inLanguage
	 * @return CommunicateAction
	 */
	public function setInLanguage(Property\InLanguage $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return CommunicateAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}