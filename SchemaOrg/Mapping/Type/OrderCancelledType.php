<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderCancelledType.
 * 
 * @method OrderCancelledType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderCancelledType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderCancelledType setDescription(Property\DescriptionProperty $description)
 * @method OrderCancelledType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderCancelledType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderCancelledType setImage(Property\ImageProperty $image)
 * @method OrderCancelledType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderCancelledType setName(Property\NameProperty $name)
 * @method OrderCancelledType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderCancelledType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderCancelledType setUrl(Property\UrlProperty $url)
 */
class OrderCancelledType extends OrderStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderCancelled';
	}
}