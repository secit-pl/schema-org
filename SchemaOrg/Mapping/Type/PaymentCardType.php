<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentCardType.
 * 
 * @method PaymentCardType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentCardType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentCardType setDescription(Property\DescriptionProperty $description)
 * @method PaymentCardType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentCardType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentCardType setImage(Property\ImageProperty $image)
 * @method PaymentCardType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentCardType setName(Property\NameProperty $name)
 * @method PaymentCardType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentCardType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentCardType setUrl(Property\UrlProperty $url)
 */
class PaymentCardType extends PaymentMethodType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentCard';
	}
}