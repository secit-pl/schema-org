<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is available for pre-order.
 * 
 * @method PreOrderType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PreOrderType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PreOrderType setDescription(Property\DescriptionProperty $description)
 * @method PreOrderType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PreOrderType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PreOrderType setImage(Property\ImageProperty $image)
 * @method PreOrderType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PreOrderType setName(Property\NameProperty $name)
 * @method PreOrderType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PreOrderType setSameAs(Property\SameAsProperty $sameAs)
 * @method PreOrderType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PreOrderType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PreOrderType setUrl(Property\UrlProperty $url)
 */
class PreOrderType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreOrder';
	}
}