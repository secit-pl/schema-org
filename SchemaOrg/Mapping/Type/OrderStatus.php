<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderStatus.
 * 
 * @method OrderStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderStatus setAlternateName(Property\AlternateName $alternateName)
 * @method OrderStatus setDescription(Property\Description $description)
 * @method OrderStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderStatus setImage(Property\Image $image)
 * @method OrderStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderStatus setName(Property\Name $name)
 * @method OrderStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderStatus setSameAs(Property\SameAs $sameAs)
 * @method OrderStatus setUrl(Property\Url $url)
 */
class OrderStatus extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderStatus';
	}
}