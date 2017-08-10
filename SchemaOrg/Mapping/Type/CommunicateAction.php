<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommunicateAction.
 */
class CommunicateAction extends InteractAction {

	/**
	 * @var Property\About
	 */
	private $about;

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * Get about.
	 * 
	 * @return Property\About
	 */
	public function getAbout() {
		return $this->about;
	}

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
	 * Set about.
	 * 
	 * @param Property\About $about
	 * @return CommunicateAction
	 */
	public function setAbout(Property\About $about) {
		$this->about = $about;

		return $this;
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