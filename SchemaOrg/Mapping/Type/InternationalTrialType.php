<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An international trial.
 * 
 * @method InternationalTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InternationalTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InternationalTrialType setDescription(Property\DescriptionProperty $description)
 * @method InternationalTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InternationalTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InternationalTrialType setImage(Property\ImageProperty $image)
 * @method InternationalTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InternationalTrialType setName(Property\NameProperty $name)
 * @method InternationalTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InternationalTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method InternationalTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InternationalTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method InternationalTrialType setUrl(Property\UrlProperty $url)
 */
class InternationalTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InternationalTrial';
	}
}