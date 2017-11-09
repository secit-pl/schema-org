<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentMethod.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PaymentMethodType instead.
 * 
 * @method PaymentMethod setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentMethod setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentMethod setDescription(Property\Description $description)
 * @method PaymentMethod setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentMethod setIdentifier(Property\Identifier $identifier)
 * @method PaymentMethod setImage(Property\Image $image)
 * @method PaymentMethod setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentMethod setName(Property\Name $name)
 * @method PaymentMethod setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentMethod setSameAs(Property\SameAs $sameAs)
 * @method PaymentMethod setUrl(Property\Url $url)
 */
class PaymentMethod extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentMethod';
	}
}