<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AskAction.
 * 
 * @method AskAction setInLanguage(Property\InLanguage $inLanguage)
 * @method AskAction setRecipient(Property\Recipient $recipient)
 */
class AskAction extends CommunicateAction {

	/**
	 * @var Property\Question
	 */
	private $question;

	/**
	 * Get question.
	 * 
	 * @return Property\Question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AskAction';
	}

	/**
	 * Set question.
	 * 
	 * @param Property\Question $question
	 * @return AskAction
	 */
	public function setQuestion(Property\Question $question) {
		$this->question = $question;

		return $this;
	}
}