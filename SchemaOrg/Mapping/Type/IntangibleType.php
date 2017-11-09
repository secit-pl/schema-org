<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IntangibleType.
 * 
 * @method IntangibleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IntangibleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IntangibleType setDescription(Property\DescriptionProperty $description)
 * @method IntangibleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IntangibleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IntangibleType setImage(Property\ImageProperty $image)
 * @method IntangibleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IntangibleType setName(Property\NameProperty $name)
 * @method IntangibleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IntangibleType setSameAs(Property\SameAsProperty $sameAs)
 * @method IntangibleType setUrl(Property\UrlProperty $url)
 */
class IntangibleType extends ThingType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Intangible';
	}
}