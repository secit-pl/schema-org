<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial design in which neither the researcher nor the patient knows the details of the treatment the patient was randomly assigned to.
 * 
 * @method DoubleBlindedTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DoubleBlindedTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DoubleBlindedTrialType setDescription(Property\DescriptionProperty $description)
 * @method DoubleBlindedTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DoubleBlindedTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DoubleBlindedTrialType setImage(Property\ImageProperty $image)
 * @method DoubleBlindedTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DoubleBlindedTrialType setName(Property\NameProperty $name)
 * @method DoubleBlindedTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DoubleBlindedTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method DoubleBlindedTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DoubleBlindedTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DoubleBlindedTrialType setUrl(Property\UrlProperty $url)
 */
class DoubleBlindedTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DoubleBlindedTrial';
	}
}