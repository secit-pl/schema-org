<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrganizationRole.
 * 
 * @method OrganizationRole setEndDate(Property\EndDate $endDate)
 * @method OrganizationRole setRoleName(Property\RoleName $roleName)
 * @method OrganizationRole setStartDate(Property\StartDate $startDate)
 */
class OrganizationRole extends Role {

	/**
	 * @var Property\NumberedPosition
	 */
	private $numberedPosition;

	/**
	 * Get numbered position.
	 * 
	 * @return Property\NumberedPosition
	 */
	public function getNumberedPosition() {
		return $this->numberedPosition;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrganizationRole';
	}

	/**
	 * Set numbered position.
	 * 
	 * @param Property\NumberedPosition $numberedPosition
	 * @return OrganizationRole
	 */
	public function setNumberedPosition(Property\NumberedPosition $numberedPosition) {
		$this->numberedPosition = $numberedPosition;

		return $this;
	}
}