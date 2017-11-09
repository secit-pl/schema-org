<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentMethodType.
 * 
 * @method PaymentMethodType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentMethodType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentMethodType setDescription(Property\DescriptionProperty $description)
 * @method PaymentMethodType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentMethodType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentMethodType setImage(Property\ImageProperty $image)
 * @method PaymentMethodType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentMethodType setName(Property\NameProperty $name)
 * @method PaymentMethodType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentMethodType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentMethodType setUrl(Property\UrlProperty $url)
 */
class PaymentMethodType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentMethod';
	}
}