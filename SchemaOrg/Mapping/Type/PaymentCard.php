<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentCard.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PaymentCardType instead.
 * 
 * @method PaymentCard setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentCard setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentCard setDescription(Property\Description $description)
 * @method PaymentCard setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentCard setIdentifier(Property\Identifier $identifier)
 * @method PaymentCard setImage(Property\Image $image)
 * @method PaymentCard setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentCard setName(Property\Name $name)
 * @method PaymentCard setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentCard setSameAs(Property\SameAs $sameAs)
 * @method PaymentCard setUrl(Property\Url $url)
 */
class PaymentCard extends PaymentMethod {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentCard';
	}
}