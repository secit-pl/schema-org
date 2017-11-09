<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentPastDue.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PaymentPastDueType instead.
 * 
 * @method PaymentPastDue setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentPastDue setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentPastDue setDescription(Property\Description $description)
 * @method PaymentPastDue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentPastDue setIdentifier(Property\Identifier $identifier)
 * @method PaymentPastDue setImage(Property\Image $image)
 * @method PaymentPastDue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentPastDue setName(Property\Name $name)
 * @method PaymentPastDue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentPastDue setSameAs(Property\SameAs $sameAs)
 * @method PaymentPastDue setUrl(Property\Url $url)
 */
class PaymentPastDue extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentPastDue';
	}
}