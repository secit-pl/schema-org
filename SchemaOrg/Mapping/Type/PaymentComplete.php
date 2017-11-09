<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentComplete.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PaymentCompleteType instead.
 * 
 * @method PaymentComplete setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentComplete setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentComplete setDescription(Property\Description $description)
 * @method PaymentComplete setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentComplete setIdentifier(Property\Identifier $identifier)
 * @method PaymentComplete setImage(Property\Image $image)
 * @method PaymentComplete setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentComplete setName(Property\Name $name)
 * @method PaymentComplete setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentComplete setSameAs(Property\SameAs $sameAs)
 * @method PaymentComplete setUrl(Property\Url $url)
 */
class PaymentComplete extends PaymentStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentComplete';
	}
}