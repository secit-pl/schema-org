<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentStatusType.
 * 
 * @method PaymentStatusType setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentStatusType setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentStatusType setDescription(Property\Description $description)
 * @method PaymentStatusType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentStatusType setImage(Property\Image $image)
 * @method PaymentStatusType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentStatusType setName(Property\Name $name)
 * @method PaymentStatusType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentStatusType setSameAs(Property\SameAs $sameAs)
 * @method PaymentStatusType setUrl(Property\Url $url)
 */
class PaymentStatusType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentStatusType';
	}
}