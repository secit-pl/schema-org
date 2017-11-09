<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderPaymentDueType.
 * 
 * @method OrderPaymentDueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderPaymentDueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderPaymentDueType setDescription(Property\DescriptionProperty $description)
 * @method OrderPaymentDueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderPaymentDueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderPaymentDueType setImage(Property\ImageProperty $image)
 * @method OrderPaymentDueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderPaymentDueType setName(Property\NameProperty $name)
 * @method OrderPaymentDueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderPaymentDueType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderPaymentDueType setUrl(Property\UrlProperty $url)
 */
class OrderPaymentDueType extends OrderStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderPaymentDue';
	}
}