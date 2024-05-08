<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An enumeration of several kinds of Map.
 * 
 * @method MapCategoryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MapCategoryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MapCategoryType setDescription(Property\DescriptionProperty $description)
 * @method MapCategoryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MapCategoryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MapCategoryType setImage(Property\ImageProperty $image)
 * @method MapCategoryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MapCategoryType setName(Property\NameProperty $name)
 * @method MapCategoryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MapCategoryType setSameAs(Property\SameAsProperty $sameAs)
 * @method MapCategoryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MapCategoryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MapCategoryType setUrl(Property\UrlProperty $url)
 */
class MapCategoryType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MapCategoryType';
	}
}