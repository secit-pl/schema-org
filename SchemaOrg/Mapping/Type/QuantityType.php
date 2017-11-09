<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QuantityType.
 * 
 * @method QuantityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QuantityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QuantityType setDescription(Property\DescriptionProperty $description)
 * @method QuantityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QuantityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QuantityType setImage(Property\ImageProperty $image)
 * @method QuantityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QuantityType setName(Property\NameProperty $name)
 * @method QuantityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QuantityType setSameAs(Property\SameAsProperty $sameAs)
 * @method QuantityType setUrl(Property\UrlProperty $url)
 */
class QuantityType extends IntangibleType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Quantity';
	}
}