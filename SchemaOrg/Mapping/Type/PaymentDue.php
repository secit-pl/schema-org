<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentDue.
 * 
 * @method PaymentDue setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentDue setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentDue setDescription(Property\Description $description)
 * @method PaymentDue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentDue setImage(Property\Image $image)
 * @method PaymentDue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentDue setName(Property\Name $name)
 * @method PaymentDue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentDue setSameAs(Property\SameAs $sameAs)
 * @method PaymentDue setUrl(Property\Url $url)
 */
class PaymentDue extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentDue';
	}
}