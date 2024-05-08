<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item has been discontinued.
 * 
 * @method DiscontinuedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiscontinuedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiscontinuedType setDescription(Property\DescriptionProperty $description)
 * @method DiscontinuedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiscontinuedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiscontinuedType setImage(Property\ImageProperty $image)
 * @method DiscontinuedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiscontinuedType setName(Property\NameProperty $name)
 * @method DiscontinuedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiscontinuedType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiscontinuedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DiscontinuedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DiscontinuedType setUrl(Property\UrlProperty $url)
 */
class DiscontinuedType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Discontinued';
	}
}