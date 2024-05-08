<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trial that takes place at multiple centers.
 * 
 * @method MultiCenterTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MultiCenterTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MultiCenterTrialType setDescription(Property\DescriptionProperty $description)
 * @method MultiCenterTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MultiCenterTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MultiCenterTrialType setImage(Property\ImageProperty $image)
 * @method MultiCenterTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MultiCenterTrialType setName(Property\NameProperty $name)
 * @method MultiCenterTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MultiCenterTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method MultiCenterTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MultiCenterTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MultiCenterTrialType setUrl(Property\UrlProperty $url)
 */
class MultiCenterTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MultiCenterTrial';
	}
}