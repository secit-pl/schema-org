<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Quantity.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\QuantityType instead.
 * 
 * @method Quantity setAdditionalType(Property\AdditionalType $additionalType)
 * @method Quantity setAlternateName(Property\AlternateName $alternateName)
 * @method Quantity setDescription(Property\Description $description)
 * @method Quantity setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Quantity setIdentifier(Property\Identifier $identifier)
 * @method Quantity setImage(Property\Image $image)
 * @method Quantity setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Quantity setName(Property\Name $name)
 * @method Quantity setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Quantity setSameAs(Property\SameAs $sameAs)
 * @method Quantity setUrl(Property\Url $url)
 */
class Quantity extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Quantity';
	}
}