<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DistanceType.
 * 
 * @method DistanceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DistanceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DistanceType setDescription(Property\DescriptionProperty $description)
 * @method DistanceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DistanceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DistanceType setImage(Property\ImageProperty $image)
 * @method DistanceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DistanceType setName(Property\NameProperty $name)
 * @method DistanceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DistanceType setSameAs(Property\SameAsProperty $sameAs)
 * @method DistanceType setUrl(Property\UrlProperty $url)
 */
class DistanceType extends QuantityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Distance';
	}
}