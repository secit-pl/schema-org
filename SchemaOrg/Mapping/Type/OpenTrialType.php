<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial design in which the researcher knows the full details of the treatment, and so does the patient.
 * 
 * @method OpenTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OpenTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OpenTrialType setDescription(Property\DescriptionProperty $description)
 * @method OpenTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OpenTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OpenTrialType setImage(Property\ImageProperty $image)
 * @method OpenTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OpenTrialType setName(Property\NameProperty $name)
 * @method OpenTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OpenTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method OpenTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OpenTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OpenTrialType setUrl(Property\UrlProperty $url)
 */
class OpenTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OpenTrial';
	}
}