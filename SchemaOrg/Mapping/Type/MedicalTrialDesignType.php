<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Design models for medical trials. Enumerated type.
 * 
 * @method MedicalTrialDesignType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalTrialDesignType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalTrialDesignType setDescription(Property\DescriptionProperty $description)
 * @method MedicalTrialDesignType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalTrialDesignType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalTrialDesignType setImage(Property\ImageProperty $image)
 * @method MedicalTrialDesignType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalTrialDesignType setName(Property\NameProperty $name)
 * @method MedicalTrialDesignType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalTrialDesignType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalTrialDesignType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalTrialDesignType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalTrialDesignType setUrl(Property\UrlProperty $url)
 */
class MedicalTrialDesignType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalTrialDesign';
	}
}