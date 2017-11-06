<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderInTransit.
 * 
 * @method OrderInTransit setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderInTransit setAlternateName(Property\AlternateName $alternateName)
 * @method OrderInTransit setDescription(Property\Description $description)
 * @method OrderInTransit setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderInTransit setIdentifier(Property\Identifier $identifier)
 * @method OrderInTransit setImage(Property\Image $image)
 * @method OrderInTransit setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderInTransit setName(Property\Name $name)
 * @method OrderInTransit setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderInTransit setSameAs(Property\SameAs $sameAs)
 * @method OrderInTransit setUrl(Property\Url $url)
 */
class OrderInTransit extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderInTransit';
	}
}