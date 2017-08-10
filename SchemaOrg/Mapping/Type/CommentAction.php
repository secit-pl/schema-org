<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommentAction.
 * 
 * @method CommentAction setAbout(Property\About $about)
 * @method CommentAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CommentAction setRecipient(Property\Recipient $recipient)
 */
class CommentAction extends CommunicateAction {

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
		return 'https://schema.org/CommentAction';
	}

	/**
	 * Set result comment.
	 * 
	 * @param Property\ResultComment $resultComment
	 * @return CommentAction
	 */
	public function setResultComment(Property\ResultComment $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}