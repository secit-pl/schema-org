<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is available for ordering and delivery before general availability.
 * 
 * @method PreSaleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PreSaleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PreSaleType setDescription(Property\DescriptionProperty $description)
 * @method PreSaleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PreSaleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PreSaleType setImage(Property\ImageProperty $image)
 * @method PreSaleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PreSaleType setName(Property\NameProperty $name)
 * @method PreSaleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PreSaleType setSameAs(Property\SameAsProperty $sameAs)
 * @method PreSaleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PreSaleType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PreSaleType setUrl(Property\UrlProperty $url)
 */
class PreSaleType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreSale';
	}
}