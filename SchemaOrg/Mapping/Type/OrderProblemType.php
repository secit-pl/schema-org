<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderProblemType.
 * 
 * @method OrderProblemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderProblemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderProblemType setDescription(Property\DescriptionProperty $description)
 * @method OrderProblemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderProblemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderProblemType setImage(Property\ImageProperty $image)
 * @method OrderProblemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderProblemType setName(Property\NameProperty $name)
 * @method OrderProblemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderProblemType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderProblemType setUrl(Property\UrlProperty $url)
 */
class OrderProblemType extends OrderStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderProblem';
	}
}