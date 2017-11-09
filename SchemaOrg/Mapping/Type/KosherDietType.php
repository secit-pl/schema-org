<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class KosherDietType.
 * 
 * @method KosherDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method KosherDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method KosherDietType setDescription(Property\DescriptionProperty $description)
 * @method KosherDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method KosherDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method KosherDietType setImage(Property\ImageProperty $image)
 * @method KosherDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method KosherDietType setName(Property\NameProperty $name)
 * @method KosherDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method KosherDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method KosherDietType setUrl(Property\UrlProperty $url)
 */
class KosherDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/KosherDiet';
	}
}