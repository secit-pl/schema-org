<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreditCardType.
 * 
 * @method CreditCardType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CreditCardType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CreditCardType setDescription(Property\DescriptionProperty $description)
 * @method CreditCardType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CreditCardType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CreditCardType setImage(Property\ImageProperty $image)
 * @method CreditCardType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CreditCardType setName(Property\NameProperty $name)
 * @method CreditCardType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CreditCardType setSameAs(Property\SameAsProperty $sameAs)
 * @method CreditCardType setUrl(Property\UrlProperty $url)
 */
class CreditCardType extends PaymentCardType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreditCard';
	}
}