<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class KosherDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\KosherDietType instead.
 * 
 * @method KosherDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method KosherDiet setAlternateName(Property\AlternateName $alternateName)
 * @method KosherDiet setDescription(Property\Description $description)
 * @method KosherDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method KosherDiet setIdentifier(Property\Identifier $identifier)
 * @method KosherDiet setImage(Property\Image $image)
 * @method KosherDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method KosherDiet setName(Property\Name $name)
 * @method KosherDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method KosherDiet setSameAs(Property\SameAs $sameAs)
 * @method KosherDiet setUrl(Property\Url $url)
 */
class KosherDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/KosherDiet';
	}
}