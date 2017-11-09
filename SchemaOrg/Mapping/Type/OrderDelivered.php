<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderDelivered.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OrderDeliveredType instead.
 * 
 * @method OrderDelivered setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderDelivered setAlternateName(Property\AlternateName $alternateName)
 * @method OrderDelivered setDescription(Property\Description $description)
 * @method OrderDelivered setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderDelivered setIdentifier(Property\Identifier $identifier)
 * @method OrderDelivered setImage(Property\Image $image)
 * @method OrderDelivered setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderDelivered setName(Property\Name $name)
 * @method OrderDelivered setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderDelivered setSameAs(Property\SameAs $sameAs)
 * @method OrderDelivered setUrl(Property\Url $url)
 */
class OrderDelivered extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderDelivered';
	}
}