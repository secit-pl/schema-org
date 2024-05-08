<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates whether this drug is available by prescription or over-the-counter.
 * 
 * @method DrugPrescriptionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugPrescriptionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugPrescriptionStatusType setDescription(Property\DescriptionProperty $description)
 * @method DrugPrescriptionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugPrescriptionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugPrescriptionStatusType setImage(Property\ImageProperty $image)
 * @method DrugPrescriptionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugPrescriptionStatusType setName(Property\NameProperty $name)
 * @method DrugPrescriptionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugPrescriptionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugPrescriptionStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugPrescriptionStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DrugPrescriptionStatusType setUrl(Property\UrlProperty $url)
 */
class DrugPrescriptionStatusType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugPrescriptionStatus';
	}
}