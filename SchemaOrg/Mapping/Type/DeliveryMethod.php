<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeliveryMethod.
 * 
 * @method DeliveryMethod setAdditionalType(Property\AdditionalType $additionalType)
 * @method DeliveryMethod setAlternateName(Property\AlternateName $alternateName)
 * @method DeliveryMethod setDescription(Property\Description $description)
 * @method DeliveryMethod setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DeliveryMethod setIdentifier(Property\Identifier $identifier)
 * @method DeliveryMethod setImage(Property\Image $image)
 * @method DeliveryMethod setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DeliveryMethod setName(Property\Name $name)
 * @method DeliveryMethod setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DeliveryMethod setSameAs(Property\SameAs $sameAs)
 * @method DeliveryMethod setUrl(Property\Url $url)
 */
class DeliveryMethod extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeliveryMethod';
	}
}