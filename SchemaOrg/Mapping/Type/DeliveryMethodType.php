<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeliveryMethodType.
 * 
 * @method DeliveryMethodType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeliveryMethodType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeliveryMethodType setDescription(Property\DescriptionProperty $description)
 * @method DeliveryMethodType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeliveryMethodType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeliveryMethodType setImage(Property\ImageProperty $image)
 * @method DeliveryMethodType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeliveryMethodType setName(Property\NameProperty $name)
 * @method DeliveryMethodType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeliveryMethodType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeliveryMethodType setUrl(Property\UrlProperty $url)
 */
class DeliveryMethodType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeliveryMethod';
	}
}