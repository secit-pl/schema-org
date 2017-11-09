<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LanguageType.
 * 
 * @method LanguageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LanguageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LanguageType setDescription(Property\DescriptionProperty $description)
 * @method LanguageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LanguageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LanguageType setImage(Property\ImageProperty $image)
 * @method LanguageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LanguageType setName(Property\NameProperty $name)
 * @method LanguageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LanguageType setSameAs(Property\SameAsProperty $sameAs)
 * @method LanguageType setUrl(Property\UrlProperty $url)
 */
class LanguageType extends IntangibleType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Language';
	}
}