<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is available on back order.
 * 
 * @method BackOrderType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BackOrderType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BackOrderType setDescription(Property\DescriptionProperty $description)
 * @method BackOrderType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BackOrderType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BackOrderType setImage(Property\ImageProperty $image)
 * @method BackOrderType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BackOrderType setName(Property\NameProperty $name)
 * @method BackOrderType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BackOrderType setSameAs(Property\SameAsProperty $sameAs)
 * @method BackOrderType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BackOrderType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BackOrderType setUrl(Property\UrlProperty $url)
 */
class BackOrderType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BackOrder';
	}
}