<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * This type covers computer programming languages such as Scheme and Lisp, as well as other language-like computer representations. Natural languages are best represented with the Language type.
 * 
 * @method ComputerLanguageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComputerLanguageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComputerLanguageType setDescription(Property\DescriptionProperty $description)
 * @method ComputerLanguageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComputerLanguageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComputerLanguageType setImage(Property\ImageProperty $image)
 * @method ComputerLanguageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComputerLanguageType setName(Property\NameProperty $name)
 * @method ComputerLanguageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComputerLanguageType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComputerLanguageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ComputerLanguageType setUrl(Property\UrlProperty $url)
 */
class ComputerLanguageType extends IntangibleType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComputerLanguage';
	}
}