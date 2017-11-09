<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemListUnordered.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ItemListUnorderedType instead.
 * 
 * @method ItemListUnordered setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemListUnordered setAlternateName(Property\AlternateName $alternateName)
 * @method ItemListUnordered setDescription(Property\Description $description)
 * @method ItemListUnordered setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemListUnordered setIdentifier(Property\Identifier $identifier)
 * @method ItemListUnordered setImage(Property\Image $image)
 * @method ItemListUnordered setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemListUnordered setName(Property\Name $name)
 * @method ItemListUnordered setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemListUnordered setSameAs(Property\SameAs $sameAs)
 * @method ItemListUnordered setUrl(Property\Url $url)
 */
class ItemListUnordered extends ItemListOrderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListUnordered';
	}
}