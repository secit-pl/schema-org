<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrganizationRole.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OrganizationRoleType instead.
 * 
 * @method OrganizationRole setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrganizationRole setAlternateName(Property\AlternateName $alternateName)
 * @method OrganizationRole setDescription(Property\Description $description)
 * @method OrganizationRole setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrganizationRole setEndDate(Property\EndDate $endDate)
 * @method OrganizationRole setIdentifier(Property\Identifier $identifier)
 * @method OrganizationRole setImage(Property\Image $image)
 * @method OrganizationRole setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrganizationRole setName(Property\Name $name)
 * @method OrganizationRole setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrganizationRole setRoleName(Property\RoleName $roleName)
 * @method OrganizationRole setSameAs(Property\SameAs $sameAs)
 * @method OrganizationRole setStartDate(Property\StartDate $startDate)
 * @method OrganizationRole setUrl(Property\Url $url)
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