<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The status of a medical study. Enumerated type.
 * 
 * @method MedicalStudyStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalStudyStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalStudyStatusType setDescription(Property\DescriptionProperty $description)
 * @method MedicalStudyStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalStudyStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalStudyStatusType setImage(Property\ImageProperty $image)
 * @method MedicalStudyStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalStudyStatusType setName(Property\NameProperty $name)
 * @method MedicalStudyStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalStudyStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalStudyStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalStudyStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalStudyStatusType setUrl(Property\UrlProperty $url)
 */
class MedicalStudyStatusType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalStudyStatus';
	}
}