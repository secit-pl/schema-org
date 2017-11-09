<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderInTransitType.
 * 
 * @method OrderInTransitType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderInTransitType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderInTransitType setDescription(Property\DescriptionProperty $description)
 * @method OrderInTransitType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderInTransitType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderInTransitType setImage(Property\ImageProperty $image)
 * @method OrderInTransitType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderInTransitType setName(Property\NameProperty $name)
 * @method OrderInTransitType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderInTransitType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderInTransitType setUrl(Property\UrlProperty $url)
 */
class OrderInTransitType extends OrderStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderInTransit';
	}
}