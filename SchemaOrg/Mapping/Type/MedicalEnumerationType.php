<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerations related to health and the practice of medicine: A concept that is used to attribute a quality to another concept, as a qualifier, a collection of items or a listing of all of the elements of a set in medicine practice.
 * 
 * @method MedicalEnumerationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalEnumerationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalEnumerationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalEnumerationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalEnumerationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalEnumerationType setImage(Property\ImageProperty $image)
 * @method MedicalEnumerationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalEnumerationType setName(Property\NameProperty $name)
 * @method MedicalEnumerationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalEnumerationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalEnumerationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalEnumerationType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalEnumerationType setUrl(Property\UrlProperty $url)
 */
class MedicalEnumerationType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalEnumeration';
	}
}