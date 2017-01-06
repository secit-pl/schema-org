<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentMethod.
 * 
 * @method PaymentMethod setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentMethod setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentMethod setDescription(Property\Description $description)
 * @method PaymentMethod setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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