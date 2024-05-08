<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of permission which can be granted for accessing a digital document.
 * 
 * @method DigitalDocumentPermissionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DigitalDocumentPermissionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DigitalDocumentPermissionType setDescription(Property\DescriptionProperty $description)
 * @method DigitalDocumentPermissionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DigitalDocumentPermissionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DigitalDocumentPermissionType setImage(Property\ImageProperty $image)
 * @method DigitalDocumentPermissionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DigitalDocumentPermissionType setName(Property\NameProperty $name)
 * @method DigitalDocumentPermissionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DigitalDocumentPermissionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DigitalDocumentPermissionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DigitalDocumentPermissionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DigitalDocumentPermissionType setUrl(Property\UrlProperty $url)
 */
class DigitalDocumentPermissionType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalDocumentPermissionType';
	}
}