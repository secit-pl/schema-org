<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Level of evidence for a medical guideline. Enumerated type.
 * 
 * @method MedicalEvidenceLevelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalEvidenceLevelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalEvidenceLevelType setDescription(Property\DescriptionProperty $description)
 * @method MedicalEvidenceLevelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalEvidenceLevelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalEvidenceLevelType setImage(Property\ImageProperty $image)
 * @method MedicalEvidenceLevelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalEvidenceLevelType setName(Property\NameProperty $name)
 * @method MedicalEvidenceLevelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalEvidenceLevelType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalEvidenceLevelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalEvidenceLevelType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalEvidenceLevelType setUrl(Property\UrlProperty $url)
 */
class MedicalEvidenceLevelType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalEvidenceLevel';
	}
}