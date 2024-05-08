<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Permission to read or view the document.
 * 
 * @method ReadPermissionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReadPermissionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReadPermissionType setDescription(Property\DescriptionProperty $description)
 * @method ReadPermissionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReadPermissionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReadPermissionType setImage(Property\ImageProperty $image)
 * @method ReadPermissionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReadPermissionType setName(Property\NameProperty $name)
 * @method ReadPermissionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReadPermissionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReadPermissionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReadPermissionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ReadPermissionType setUrl(Property\UrlProperty $url)
 */
class ReadPermissionType extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReadPermission';
	}
}