<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderCancelled.
 * 
 * @method OrderCancelled setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderCancelled setAlternateName(Property\AlternateName $alternateName)
 * @method OrderCancelled setDescription(Property\Description $description)
 * @method OrderCancelled setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderCancelled setIdentifier(Property\Identifier $identifier)
 * @method OrderCancelled setImage(Property\Image $image)
 * @method OrderCancelled setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderCancelled setName(Property\Name $name)
 * @method OrderCancelled setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderCancelled setSameAs(Property\SameAs $sameAs)
 * @method OrderCancelled setUrl(Property\Url $url)
 */
class OrderCancelled extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderCancelled';
	}
}