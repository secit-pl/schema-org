<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentAutomaticallyApplied.
 * 
 * @method PaymentAutomaticallyApplied setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentAutomaticallyApplied setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentAutomaticallyApplied setDescription(Property\Description $description)
 * @method PaymentAutomaticallyApplied setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentAutomaticallyApplied setImage(Property\Image $image)
 * @method PaymentAutomaticallyApplied setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentAutomaticallyApplied setName(Property\Name $name)
 * @method PaymentAutomaticallyApplied setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentAutomaticallyApplied setSameAs(Property\SameAs $sameAs)
 * @method PaymentAutomaticallyApplied setUrl(Property\Url $url)
 */
class PaymentAutomaticallyApplied extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentAutomaticallyApplied';
	}
}