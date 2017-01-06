<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyScope.
 * 
 * @method WarrantyScope setAdditionalType(Property\AdditionalType $additionalType)
 * @method WarrantyScope setAlternateName(Property\AlternateName $alternateName)
 * @method WarrantyScope setDescription(Property\Description $description)
 * @method WarrantyScope setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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