<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemListOrderDescending.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ItemListOrderDescendingType instead.
 * 
 * @method ItemListOrderDescending setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemListOrderDescending setAlternateName(Property\AlternateName $alternateName)
 * @method ItemListOrderDescending setDescription(Property\Description $description)
 * @method ItemListOrderDescending setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemListOrderDescending setIdentifier(Property\Identifier $identifier)
 * @method ItemListOrderDescending setImage(Property\Image $image)
 * @method ItemListOrderDescending setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemListOrderDescending setName(Property\Name $name)
 * @method ItemListOrderDescending setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemListOrderDescending setSameAs(Property\SameAs $sameAs)
 * @method ItemListOrderDescending setUrl(Property\Url $url)
 */
class ItemListOrderDescending extends ItemListOrderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderDescending';
	}
}