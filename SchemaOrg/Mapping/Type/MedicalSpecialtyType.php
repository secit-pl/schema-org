<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any specific branch of medical science or practice. Medical specialities include clinical specialties that pertain to particular organ systems and their respective disease states, as well as allied health specialties. Enumerated type.
 * 
 * @method MedicalSpecialtyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalSpecialtyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalSpecialtyType setDescription(Property\DescriptionProperty $description)
 * @method MedicalSpecialtyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalSpecialtyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalSpecialtyType setImage(Property\ImageProperty $image)
 * @method MedicalSpecialtyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalSpecialtyType setName(Property\NameProperty $name)
 * @method MedicalSpecialtyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalSpecialtyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalSpecialtyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalSpecialtyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalSpecialtyType setUrl(Property\UrlProperty $url)
 */
class MedicalSpecialtyType extends SpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalSpecialty';
	}
}