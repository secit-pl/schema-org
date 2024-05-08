<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Physical activity that is engaged in to improve joint and muscle flexibility.
 * 
 * @method FlexibilityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FlexibilityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FlexibilityType setDescription(Property\DescriptionProperty $description)
 * @method FlexibilityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FlexibilityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FlexibilityType setImage(Property\ImageProperty $image)
 * @method FlexibilityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FlexibilityType setName(Property\NameProperty $name)
 * @method FlexibilityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FlexibilityType setSameAs(Property\SameAsProperty $sameAs)
 * @method FlexibilityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FlexibilityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FlexibilityType setUrl(Property\UrlProperty $url)
 */
class FlexibilityType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Flexibility';
	}
}