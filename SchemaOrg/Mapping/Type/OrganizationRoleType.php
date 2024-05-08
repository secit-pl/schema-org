<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A subclass of Role used to describe roles within organizations.
 * 
 * @method OrganizationRoleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrganizationRoleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrganizationRoleType setDescription(Property\DescriptionProperty $description)
 * @method OrganizationRoleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrganizationRoleType setEndDate(Property\EndDateProperty $endDate)
 * @method OrganizationRoleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrganizationRoleType setImage(Property\ImageProperty $image)
 * @method OrganizationRoleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrganizationRoleType setName(Property\NameProperty $name)
 * @method OrganizationRoleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrganizationRoleType setRoleName(Property\RoleNameProperty $roleName)
 * @method OrganizationRoleType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrganizationRoleType setStartDate(Property\StartDateProperty $startDate)
 * @method OrganizationRoleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrganizationRoleType setUrl(Property\UrlProperty $url)
 */
class OrganizationRoleType extends RoleType {

	/**
	 * @var Property\NumberedPositionProperty
	 */
	private $numberedPosition;

	/**
	 * Get numbered position.
	 *
	 * @return Property\NumberedPositionProperty
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
	 * @param Property\NumberedPositionProperty $numberedPosition
	 * @return OrganizationRoleType
	 */
	public function setNumberedPosition(Property\NumberedPositionProperty $numberedPosition) {
		$this->numberedPosition = $numberedPosition;

		return $this;
	}
}