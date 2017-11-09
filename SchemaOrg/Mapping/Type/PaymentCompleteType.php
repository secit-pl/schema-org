<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentCompleteType.
 * 
 * @method PaymentCompleteType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentCompleteType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentCompleteType setDescription(Property\DescriptionProperty $description)
 * @method PaymentCompleteType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentCompleteType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentCompleteType setImage(Property\ImageProperty $image)
 * @method PaymentCompleteType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentCompleteType setName(Property\NameProperty $name)
 * @method PaymentCompleteType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentCompleteType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentCompleteType setUrl(Property\UrlProperty $url)
 */
class PaymentCompleteType extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentComplete';
	}
}