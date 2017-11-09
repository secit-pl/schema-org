<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentPastDueType.
 * 
 * @method PaymentPastDueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentPastDueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentPastDueType setDescription(Property\DescriptionProperty $description)
 * @method PaymentPastDueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentPastDueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentPastDueType setImage(Property\ImageProperty $image)
 * @method PaymentPastDueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentPastDueType setName(Property\NameProperty $name)
 * @method PaymentPastDueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentPastDueType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentPastDueType setUrl(Property\UrlProperty $url)
 */
class PaymentPastDueType extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentPastDue';
	}
}