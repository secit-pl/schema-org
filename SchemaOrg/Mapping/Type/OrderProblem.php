<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderProblem.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OrderProblemType instead.
 * 
 * @method OrderProblem setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderProblem setAlternateName(Property\AlternateName $alternateName)
 * @method OrderProblem setDescription(Property\Description $description)
 * @method OrderProblem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderProblem setIdentifier(Property\Identifier $identifier)
 * @method OrderProblem setImage(Property\Image $image)
 * @method OrderProblem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderProblem setName(Property\Name $name)
 * @method OrderProblem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderProblem setSameAs(Property\SameAs $sameAs)
 * @method OrderProblem setUrl(Property\Url $url)
 */
class OrderProblem extends OrderStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderProblem';
	}
}