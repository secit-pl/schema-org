<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A placebo-controlled trial design.
 * 
 * @method PlaceboControlledTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlaceboControlledTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlaceboControlledTrialType setDescription(Property\DescriptionProperty $description)
 * @method PlaceboControlledTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlaceboControlledTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlaceboControlledTrialType setImage(Property\ImageProperty $image)
 * @method PlaceboControlledTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlaceboControlledTrialType setName(Property\NameProperty $name)
 * @method PlaceboControlledTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlaceboControlledTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlaceboControlledTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlaceboControlledTrialType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PlaceboControlledTrialType setUrl(Property\UrlProperty $url)
 */
class PlaceboControlledTrialType extends MedicalTrialDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlaceboControlledTrial';
	}
}