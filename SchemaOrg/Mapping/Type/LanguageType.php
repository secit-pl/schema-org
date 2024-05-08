<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Natural languages such as Spanish, Tamil, Hindi, English, etc. Formal language code tags expressed in BCP 47 can be used via the alternateName property. The Language type previously also covered programming languages such as Scheme and Lisp, which are now best represented using ComputerLanguage.
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
 * @method LanguageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
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