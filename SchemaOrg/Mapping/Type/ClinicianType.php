<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Medical clinicians, including practicing physicians and other medical professionals involved in clinical practice.
 * 
 * @method ClinicianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ClinicianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ClinicianType setDescription(Property\DescriptionProperty $description)
 * @method ClinicianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ClinicianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ClinicianType setImage(Property\ImageProperty $image)
 * @method ClinicianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ClinicianType setName(Property\NameProperty $name)
 * @method ClinicianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ClinicianType setSameAs(Property\SameAsProperty $sameAs)
 * @method ClinicianType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ClinicianType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ClinicianType setUrl(Property\UrlProperty $url)
 */
class ClinicianType extends MedicalAudienceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Clinician';
	}
}