<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FemaleType.
 * 
 * @method FemaleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FemaleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FemaleType setDescription(Property\DescriptionProperty $description)
 * @method FemaleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FemaleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FemaleType setImage(Property\ImageProperty $image)
 * @method FemaleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FemaleType setName(Property\NameProperty $name)
 * @method FemaleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FemaleType setSameAs(Property\SameAsProperty $sameAs)
 * @method FemaleType setUrl(Property\UrlProperty $url)
 */
class FemaleType extends GenderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Female';
	}
}