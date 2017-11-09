<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SoldOut.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SoldOutType instead.
 * 
 * @method SoldOut setAdditionalType(Property\AdditionalType $additionalType)
 * @method SoldOut setAlternateName(Property\AlternateName $alternateName)
 * @method SoldOut setDescription(Property\Description $description)
 * @method SoldOut setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SoldOut setIdentifier(Property\Identifier $identifier)
 * @method SoldOut setImage(Property\Image $image)
 * @method SoldOut setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SoldOut setName(Property\Name $name)
 * @method SoldOut setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SoldOut setSameAs(Property\SameAs $sameAs)
 * @method SoldOut setUrl(Property\Url $url)
 */
class SoldOut extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SoldOut';
	}
}