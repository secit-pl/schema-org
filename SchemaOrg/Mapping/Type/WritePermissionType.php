<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Permission to write or edit the document.
 * 
 * @method WritePermissionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WritePermissionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WritePermissionType setDescription(Property\DescriptionProperty $description)
 * @method WritePermissionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WritePermissionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WritePermissionType setImage(Property\ImageProperty $image)
 * @method WritePermissionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WritePermissionType setName(Property\NameProperty $name)
 * @method WritePermissionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WritePermissionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WritePermissionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WritePermissionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method WritePermissionType setUrl(Property\UrlProperty $url)
 */
class WritePermissionType extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WritePermission';
	}
}