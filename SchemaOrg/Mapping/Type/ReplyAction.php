<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplyAction.
 */
class ReplyAction {

	/**
	 */
	private $id;

	/**
	 * @var Property\ResultComment
	 */
	private $resultComment;

	/**
	 * ReplyAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

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