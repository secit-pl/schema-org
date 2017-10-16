<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemListOrderType.
 * 
 * @method ItemListOrderType setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemListOrderType setAlternateName(Property\AlternateName $alternateName)
 * @method ItemListOrderType setDescription(Property\Description $description)
 * @method ItemListOrderType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemListOrderType setIdentifier(Property\Identifier $identifier)
 * @method ItemListOrderType setImage(Property\Image $image)
 * @method ItemListOrderType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemListOrderType setName(Property\Name $name)
 * @method ItemListOrderType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemListOrderType setSameAs(Property\SameAs $sameAs)
 * @method ItemListOrderType setUrl(Property\Url $url)
 */
class ItemListOrderType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderType';
	}
}