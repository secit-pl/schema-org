<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyScope.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\WarrantyScopeType instead.
 * 
 * @method WarrantyScope setAdditionalType(Property\AdditionalType $additionalType)
 * @method WarrantyScope setAlternateName(Property\AlternateName $alternateName)
 * @method WarrantyScope setDescription(Property\Description $description)
 * @method WarrantyScope setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WarrantyScope setIdentifier(Property\Identifier $identifier)
 * @method WarrantyScope setImage(Property\Image $image)
 * @method WarrantyScope setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WarrantyScope setName(Property\Name $name)
 * @method WarrantyScope setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WarrantyScope setSameAs(Property\SameAs $sameAs)
 * @method WarrantyScope setUrl(Property\Url $url)
 */
class WarrantyScope extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WarrantyScope';
	}
}