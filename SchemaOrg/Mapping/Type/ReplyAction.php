<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplyAction.
 * 
 * @method ReplyAction setAbout(Property\About $about)
 * @method ReplyAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ReplyAction setRecipient(Property\Recipient $recipient)
 */
class ReplyAction extends CommunicateAction {

	/**
	 * @var Property\ResultComment
	 */
	private $resultComment;

	/**
	 * Get result comment.
	 * 
	 * @return Property\ResultComment
	 */
	public function getResultComment() {
		return $this->resultComment;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReplyAction';
	}

	/**
	 * Set result comment.
	 * 
	 * @param Property\ResultComment $resultComment
	 * @return ReplyAction
	 */
	public function setResultComment(Property\ResultComment $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}