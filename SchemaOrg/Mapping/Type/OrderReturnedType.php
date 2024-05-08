<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * OrderStatus representing that an order has been returned.
 * 
 * @method OrderReturnedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderReturnedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderReturnedType setDescription(Property\DescriptionProperty $description)
 * @method OrderReturnedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderReturnedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderReturnedType setImage(Property\ImageProperty $image)
 * @method OrderReturnedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderReturnedType setName(Property\NameProperty $name)
 * @method OrderReturnedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderReturnedType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderReturnedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderReturnedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OrderReturnedType setUrl(Property\UrlProperty $url)
 */
class OrderReturnedType extends OrderStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderReturned';
	}
}