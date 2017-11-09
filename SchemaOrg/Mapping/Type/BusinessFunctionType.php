<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessFunctionType.
 * 
 * @method BusinessFunctionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusinessFunctionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusinessFunctionType setDescription(Property\DescriptionProperty $description)
 * @method BusinessFunctionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusinessFunctionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusinessFunctionType setImage(Property\ImageProperty $image)
 * @method BusinessFunctionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusinessFunctionType setName(Property\NameProperty $name)
 * @method BusinessFunctionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusinessFunctionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusinessFunctionType setUrl(Property\UrlProperty $url)
 */
class BusinessFunctionType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessFunction';
	}
}