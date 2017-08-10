<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FollowAction.
 */
class FollowAction extends InteractAction {

	/**
	 * @var Property\Followee
	 */
	private $followee;

	/**
	 * Get followee.
	 * 
	 * @return Property\Followee
	 */
	public function getFollowee() {
		return $this->followee;
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