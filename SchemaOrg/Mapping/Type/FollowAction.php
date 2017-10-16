<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FollowAction.
 */
class FollowAction {

	/**
	 * @var Property\Followee
	 */
	private $followee;

	/**
	 */
	private $id;

	/**
	 * FollowAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get followee.
	 * 
	 * @return Property\Followee
	 */
	public function getFollowee() {
		return $this->followee;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FollowAction';
	}

	/**
	 * Set followee.
	 * 
	 * @param Property\Followee $followee
	 * @return FollowAction
	 */
	public function setFollowee(Property\Followee $followee) {
		$this->followee = $followee;

		return $this;
	}
}