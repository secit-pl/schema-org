<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderPickupAvailable.
 * 
 * @method OrderPickupAvailable setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderPickupAvailable setAlternateName(Property\AlternateName $alternateName)
 * @method OrderPickupAvailable setDescription(Property\Description $description)
 * @method OrderPickupAvailable setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderPickupAvailable setIdentifier(Property\Identifier $identifier)
 * @method OrderPickupAvailable setImage(Property\Image $image)
 * @method OrderPickupAvailable setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderPickupAvailable setName(Property\Name $name)
 * @method OrderPickupAvailable setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderPickupAvailable setSameAs(Property\SameAs $sameAs)
 * @method OrderPickupAvailable setUrl(Property\Url $url)
 */
class OrderPickupAvailable extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderPickupAvailable';
	}
}