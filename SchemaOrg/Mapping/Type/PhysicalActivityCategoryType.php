<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Categories of physical activity, organized by physiologic classification.
 * 
 * @method PhysicalActivityCategoryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysicalActivityCategoryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysicalActivityCategoryType setDescription(Property\DescriptionProperty $description)
 * @method PhysicalActivityCategoryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysicalActivityCategoryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysicalActivityCategoryType setImage(Property\ImageProperty $image)
 * @method PhysicalActivityCategoryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysicalActivityCategoryType setName(Property\NameProperty $name)
 * @method PhysicalActivityCategoryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysicalActivityCategoryType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysicalActivityCategoryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysicalActivityCategoryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PhysicalActivityCategoryType setUrl(Property\UrlProperty $url)
 */
class PhysicalActivityCategoryType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhysicalActivityCategory';
	}
}