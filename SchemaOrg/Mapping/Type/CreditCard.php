<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreditCard.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CreditCardType instead.
 * 
 * @method CreditCard setAdditionalType(Property\AdditionalType $additionalType)
 * @method CreditCard setAlternateName(Property\AlternateName $alternateName)
 * @method CreditCard setDescription(Property\Description $description)
 * @method CreditCard setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CreditCard setIdentifier(Property\Identifier $identifier)
 * @method CreditCard setImage(Property\Image $image)
 * @method CreditCard setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CreditCard setName(Property\Name $name)
 * @method CreditCard setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CreditCard setSameAs(Property\SameAs $sameAs)
 * @method CreditCard setUrl(Property\Url $url)
 */
class CreditCard extends PaymentCard {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreditCard';
	}
}