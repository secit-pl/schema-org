<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial that takes place at a single center.
 * 
 * @method SingleCenterTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SingleCenterTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SingleCenterTrialType setDescription(Property\DescriptionProperty $description)
 * @method SingleCenterTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SingleCenterTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SingleCenterTrialType setImage(Property\ImageProperty $image)
 * @method SingleCenterTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SingleCenterTrialType setName(Property\NameProperty $name)
 * @method SingleCenterTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SingleCenterTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method SingleCenterTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SingleCenterTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SingleCenterTrialType setUrl(Property\UrlProperty $url)
 */
class SingleCenterTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleCenterTrial';
	}
}