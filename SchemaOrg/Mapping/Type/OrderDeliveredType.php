<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * OrderStatus representing successful delivery of an order.
 * 
 * @method OrderDeliveredType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderDeliveredType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderDeliveredType setDescription(Property\DescriptionProperty $description)
 * @method OrderDeliveredType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderDeliveredType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderDeliveredType setImage(Property\ImageProperty $image)
 * @method OrderDeliveredType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderDeliveredType setName(Property\NameProperty $name)
 * @method OrderDeliveredType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderDeliveredType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderDeliveredType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderDeliveredType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OrderDeliveredType setUrl(Property\UrlProperty $url)
 */
class OrderDeliveredType extends OrderStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderDelivered';
	}
}