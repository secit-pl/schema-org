<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 * 
 * @method CarUsageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CarUsageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CarUsageType setDescription(Property\DescriptionProperty $description)
 * @method CarUsageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CarUsageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CarUsageType setImage(Property\ImageProperty $image)
 * @method CarUsageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CarUsageType setName(Property\NameProperty $name)
 * @method CarUsageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CarUsageType setSameAs(Property\SameAsProperty $sameAs)
 * @method CarUsageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CarUsageType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CarUsageType setUrl(Property\UrlProperty $url)
 */
class CarUsageType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CarUsageType';
	}
}