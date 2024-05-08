<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * OrderStatus representing that there is a problem with the order.
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
 * @method OrderProblemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderProblemType setSupersededBy(Property\SupersededByProperty $supersededBy)
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