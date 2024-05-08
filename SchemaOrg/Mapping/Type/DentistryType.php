<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A branch of medicine that is involved in the dental care.
 * 
 * @method DentistryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DentistryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DentistryType setDescription(Property\DescriptionProperty $description)
 * @method DentistryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DentistryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DentistryType setImage(Property\ImageProperty $image)
 * @method DentistryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DentistryType setName(Property\NameProperty $name)
 * @method DentistryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DentistryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DentistryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DentistryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DentistryType setUrl(Property\UrlProperty $url)
 */
class DentistryType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dentistry';
	}
}