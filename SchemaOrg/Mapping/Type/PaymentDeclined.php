<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentDeclined.
 * 
 * @method PaymentDeclined setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentDeclined setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentDeclined setDescription(Property\Description $description)
 * @method PaymentDeclined setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentDeclined setIdentifier(Property\Identifier $identifier)
 * @method PaymentDeclined setImage(Property\Image $image)
 * @method PaymentDeclined setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentDeclined setName(Property\Name $name)
 * @method PaymentDeclined setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentDeclined setSameAs(Property\SameAs $sameAs)
 * @method PaymentDeclined setUrl(Property\Url $url)
 */
class PaymentDeclined extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentDeclined';
	}
}