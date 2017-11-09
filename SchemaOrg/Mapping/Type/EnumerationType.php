<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EnumerationType.
 * 
 * @method EnumerationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EnumerationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EnumerationType setDescription(Property\DescriptionProperty $description)
 * @method EnumerationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EnumerationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EnumerationType setImage(Property\ImageProperty $image)
 * @method EnumerationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EnumerationType setName(Property\NameProperty $name)
 * @method EnumerationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EnumerationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EnumerationType setUrl(Property\UrlProperty $url)
 */
class EnumerationType extends IntangibleType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Enumeration';
	}
}