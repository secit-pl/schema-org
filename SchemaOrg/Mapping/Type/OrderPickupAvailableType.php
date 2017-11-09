<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderPickupAvailableType.
 * 
 * @method OrderPickupAvailableType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderPickupAvailableType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderPickupAvailableType setDescription(Property\DescriptionProperty $description)
 * @method OrderPickupAvailableType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderPickupAvailableType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderPickupAvailableType setImage(Property\ImageProperty $image)
 * @method OrderPickupAvailableType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderPickupAvailableType setName(Property\NameProperty $name)
 * @method OrderPickupAvailableType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderPickupAvailableType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderPickupAvailableType setUrl(Property\UrlProperty $url)
 */
class OrderPickupAvailableType extends OrderStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderPickupAvailable';
	}
}