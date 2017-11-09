<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ParcelServiceType.
 * 
 * @method ParcelServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ParcelServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ParcelServiceType setDescription(Property\DescriptionProperty $description)
 * @method ParcelServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ParcelServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ParcelServiceType setImage(Property\ImageProperty $image)
 * @method ParcelServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ParcelServiceType setName(Property\NameProperty $name)
 * @method ParcelServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ParcelServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ParcelServiceType setUrl(Property\UrlProperty $url)
 */
class ParcelServiceType extends DeliveryMethodType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ParcelService';
	}
}