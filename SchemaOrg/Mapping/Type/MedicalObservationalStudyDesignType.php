<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Design models for observational medical studies. Enumerated type.
 * 
 * @method MedicalObservationalStudyDesignType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalObservationalStudyDesignType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalObservationalStudyDesignType setDescription(Property\DescriptionProperty $description)
 * @method MedicalObservationalStudyDesignType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalObservationalStudyDesignType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalObservationalStudyDesignType setImage(Property\ImageProperty $image)
 * @method MedicalObservationalStudyDesignType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalObservationalStudyDesignType setName(Property\NameProperty $name)
 * @method MedicalObservationalStudyDesignType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalObservationalStudyDesignType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalObservationalStudyDesignType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalObservationalStudyDesignType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalObservationalStudyDesignType setUrl(Property\UrlProperty $url)
 */
class MedicalObservationalStudyDesignType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalObservationalStudyDesign';
	}
}