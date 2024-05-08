<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The practice or art and science of preparing and dispensing drugs and medicines.
 * 
 * @method PharmacySpecialtyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PharmacySpecialtyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PharmacySpecialtyType setDescription(Property\DescriptionProperty $description)
 * @method PharmacySpecialtyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PharmacySpecialtyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PharmacySpecialtyType setImage(Property\ImageProperty $image)
 * @method PharmacySpecialtyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PharmacySpecialtyType setName(Property\NameProperty $name)
 * @method PharmacySpecialtyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PharmacySpecialtyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PharmacySpecialtyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PharmacySpecialtyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PharmacySpecialtyType setUrl(Property\UrlProperty $url)
 */
class PharmacySpecialtyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PharmacySpecialty';
	}
}