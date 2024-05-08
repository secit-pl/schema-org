<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial design in which the researcher knows which treatment the patient was randomly assigned to but the patient does not.
 * 
 * @method SingleBlindedTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SingleBlindedTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SingleBlindedTrialType setDescription(Property\DescriptionProperty $description)
 * @method SingleBlindedTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SingleBlindedTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SingleBlindedTrialType setImage(Property\ImageProperty $image)
 * @method SingleBlindedTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SingleBlindedTrialType setName(Property\NameProperty $name)
 * @method SingleBlindedTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SingleBlindedTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method SingleBlindedTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SingleBlindedTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SingleBlindedTrialType setUrl(Property\UrlProperty $url)
 */
class SingleBlindedTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleBlindedTrial';
	}
}