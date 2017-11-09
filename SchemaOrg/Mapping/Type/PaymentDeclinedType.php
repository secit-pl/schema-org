<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentDeclinedType.
 * 
 * @method PaymentDeclinedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentDeclinedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentDeclinedType setDescription(Property\DescriptionProperty $description)
 * @method PaymentDeclinedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentDeclinedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentDeclinedType setImage(Property\ImageProperty $image)
 * @method PaymentDeclinedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentDeclinedType setName(Property\NameProperty $name)
 * @method PaymentDeclinedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentDeclinedType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentDeclinedType setUrl(Property\UrlProperty $url)
 */
class PaymentDeclinedType extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentDeclined';
	}
}