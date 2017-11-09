<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderReturned.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OrderReturnedType instead.
 * 
 * @method OrderReturned setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderReturned setAlternateName(Property\AlternateName $alternateName)
 * @method OrderReturned setDescription(Property\Description $description)
 * @method OrderReturned setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderReturned setIdentifier(Property\Identifier $identifier)
 * @method OrderReturned setImage(Property\Image $image)
 * @method OrderReturned setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderReturned setName(Property\Name $name)
 * @method OrderReturned setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderReturned setSameAs(Property\SameAs $sameAs)
 * @method OrderReturned setUrl(Property\Url $url)
 */
class OrderReturned extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderReturned';
	}
}