<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A randomized trial design.
 * 
 * @method RandomizedTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RandomizedTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RandomizedTrialType setDescription(Property\DescriptionProperty $description)
 * @method RandomizedTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RandomizedTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RandomizedTrialType setImage(Property\ImageProperty $image)
 * @method RandomizedTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RandomizedTrialType setName(Property\NameProperty $name)
 * @method RandomizedTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RandomizedTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method RandomizedTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RandomizedTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RandomizedTrialType setUrl(Property\UrlProperty $url)
 */
class RandomizedTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RandomizedTrial';
	}
}