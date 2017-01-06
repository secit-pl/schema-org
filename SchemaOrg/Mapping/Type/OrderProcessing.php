<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderProcessing.
 * 
 * @method OrderProcessing setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderProcessing setAlternateName(Property\AlternateName $alternateName)
 * @method OrderProcessing setDescription(Property\Description $description)
 * @method OrderProcessing setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderProcessing setImage(Property\Image $image)
 * @method OrderProcessing setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderProcessing setName(Property\Name $name)
 * @method OrderProcessing setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderProcessing setSameAs(Property\SameAs $sameAs)
 * @method OrderProcessing setUrl(Property\Url $url)
 */
class OrderProcessing extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderProcessing';
	}
}