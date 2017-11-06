<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderPaymentDue.
 * 
 * @method OrderPaymentDue setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderPaymentDue setAlternateName(Property\AlternateName $alternateName)
 * @method OrderPaymentDue setDescription(Property\Description $description)
 * @method OrderPaymentDue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderPaymentDue setIdentifier(Property\Identifier $identifier)
 * @method OrderPaymentDue setImage(Property\Image $image)
 * @method OrderPaymentDue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderPaymentDue setName(Property\Name $name)
 * @method OrderPaymentDue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderPaymentDue setSameAs(Property\SameAs $sameAs)
 * @method OrderPaymentDue setUrl(Property\Url $url)
 */
class OrderPaymentDue extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderPaymentDue';
	}
}