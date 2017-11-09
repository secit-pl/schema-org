<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemListOrderAscending.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ItemListOrderAscendingType instead.
 * 
 * @method ItemListOrderAscending setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemListOrderAscending setAlternateName(Property\AlternateName $alternateName)
 * @method ItemListOrderAscending setDescription(Property\Description $description)
 * @method ItemListOrderAscending setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemListOrderAscending setIdentifier(Property\Identifier $identifier)
 * @method ItemListOrderAscending setImage(Property\Image $image)
 * @method ItemListOrderAscending setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemListOrderAscending setName(Property\Name $name)
 * @method ItemListOrderAscending setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemListOrderAscending setSameAs(Property\SameAs $sameAs)
 * @method ItemListOrderAscending setUrl(Property\Url $url)
 */
class ItemListOrderAscending extends ItemListOrderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderAscending';
	}
}