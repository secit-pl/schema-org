<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * OrderStatus representing that an order is being processed.
 * 
 * @method OrderProcessingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderProcessingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderProcessingType setDescription(Property\DescriptionProperty $description)
 * @method OrderProcessingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderProcessingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderProcessingType setImage(Property\ImageProperty $image)
 * @method OrderProcessingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderProcessingType setName(Property\NameProperty $name)
 * @method OrderProcessingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderProcessingType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderProcessingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderProcessingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OrderProcessingType setUrl(Property\UrlProperty $url)
 */
class OrderProcessingType extends OrderStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderProcessing';
	}
}