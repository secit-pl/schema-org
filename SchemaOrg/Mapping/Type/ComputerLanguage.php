<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComputerLanguage.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ComputerLanguageType instead.
 * 
 * @method ComputerLanguage setAdditionalType(Property\AdditionalType $additionalType)
 * @method ComputerLanguage setAlternateName(Property\AlternateName $alternateName)
 * @method ComputerLanguage setDescription(Property\Description $description)
 * @method ComputerLanguage setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ComputerLanguage setIdentifier(Property\Identifier $identifier)
 * @method ComputerLanguage setImage(Property\Image $image)
 * @method ComputerLanguage setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ComputerLanguage setName(Property\Name $name)
 * @method ComputerLanguage setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ComputerLanguage setSameAs(Property\SameAs $sameAs)
 * @method ComputerLanguage setUrl(Property\Url $url)
 */
class ComputerLanguage extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComputerLanguage';
	}
}