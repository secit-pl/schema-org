<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial design in which neither the researcher, the person administering the therapy nor the patient knows the details of the treatment the patient was randomly assigned to.
 * 
 * @method TripleBlindedTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TripleBlindedTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TripleBlindedTrialType setDescription(Property\DescriptionProperty $description)
 * @method TripleBlindedTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TripleBlindedTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TripleBlindedTrialType setImage(Property\ImageProperty $image)
 * @method TripleBlindedTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TripleBlindedTrialType setName(Property\NameProperty $name)
 * @method TripleBlindedTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TripleBlindedTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method TripleBlindedTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TripleBlindedTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TripleBlindedTrialType setUrl(Property\UrlProperty $url)
 */
class TripleBlindedTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TripleBlindedTrial';
	}
}