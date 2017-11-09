<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StructuredValueType.
 * 
 * @method StructuredValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StructuredValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StructuredValueType setDescription(Property\DescriptionProperty $description)
 * @method StructuredValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StructuredValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StructuredValueType setImage(Property\ImageProperty $image)
 * @method StructuredValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StructuredValueType setName(Property\NameProperty $name)
 * @method StructuredValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StructuredValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method StructuredValueType setUrl(Property\UrlProperty $url)
 */
class StructuredValueType extends IntangibleType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StructuredValue';
	}
}