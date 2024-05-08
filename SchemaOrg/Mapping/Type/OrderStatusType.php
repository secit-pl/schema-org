<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerated status values for Order.
 * 
 * @method OrderStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderStatusType setDescription(Property\DescriptionProperty $description)
 * @method OrderStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderStatusType setImage(Property\ImageProperty $image)
 * @method OrderStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderStatusType setName(Property\NameProperty $name)
 * @method OrderStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OrderStatusType setUrl(Property\UrlProperty $url)
 */
class OrderStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderStatus';
	}
}