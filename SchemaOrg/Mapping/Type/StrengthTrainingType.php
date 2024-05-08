<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Physical activity that is engaged in to improve muscle and bone strength. Also referred to as resistance training.
 * 
 * @method StrengthTrainingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StrengthTrainingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StrengthTrainingType setDescription(Property\DescriptionProperty $description)
 * @method StrengthTrainingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StrengthTrainingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StrengthTrainingType setImage(Property\ImageProperty $image)
 * @method StrengthTrainingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StrengthTrainingType setName(Property\NameProperty $name)
 * @method StrengthTrainingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StrengthTrainingType setSameAs(Property\SameAsProperty $sameAs)
 * @method StrengthTrainingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method StrengthTrainingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method StrengthTrainingType setUrl(Property\UrlProperty $url)
 */
class StrengthTrainingType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StrengthTraining';
	}
}