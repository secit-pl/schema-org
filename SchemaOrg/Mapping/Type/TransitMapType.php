<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TransitMapType.
 * 
 * @method TransitMapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TransitMapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TransitMapType setDescription(Property\DescriptionProperty $description)
 * @method TransitMapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TransitMapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TransitMapType setImage(Property\ImageProperty $image)
 * @method TransitMapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TransitMapType setName(Property\NameProperty $name)
 * @method TransitMapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TransitMapType setSameAs(Property\SameAsProperty $sameAs)
 * @method TransitMapType setUrl(Property\UrlProperty $url)
 */
class TransitMapType extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TransitMap';
	}
}