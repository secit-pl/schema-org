<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DurationType.
 * 
 * @method DurationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DurationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DurationType setDescription(Property\DescriptionProperty $description)
 * @method DurationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DurationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DurationType setImage(Property\ImageProperty $image)
 * @method DurationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DurationType setName(Property\NameProperty $name)
 * @method DurationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DurationType setSameAs(Property\SameAsProperty $sameAs)
 * @method DurationType setUrl(Property\UrlProperty $url)
 */
class DurationType extends QuantityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Duration';
	}
}