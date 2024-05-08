<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Suspended.
 * 
 * @method SuspendedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SuspendedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SuspendedType setDescription(Property\DescriptionProperty $description)
 * @method SuspendedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SuspendedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SuspendedType setImage(Property\ImageProperty $image)
 * @method SuspendedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SuspendedType setName(Property\NameProperty $name)
 * @method SuspendedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SuspendedType setSameAs(Property\SameAsProperty $sameAs)
 * @method SuspendedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SuspendedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SuspendedType setUrl(Property\UrlProperty $url)
 */
class SuspendedType extends MedicalStudyStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Suspended';
	}
}