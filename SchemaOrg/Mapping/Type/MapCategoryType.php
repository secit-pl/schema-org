<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MapCategoryType.
 * 
 * @method MapCategoryType setAdditionalType(Property\AdditionalType $additionalType)
 * @method MapCategoryType setAlternateName(Property\AlternateName $alternateName)
 * @method MapCategoryType setDescription(Property\Description $description)
 * @method MapCategoryType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MapCategoryType setImage(Property\Image $image)
 * @method MapCategoryType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MapCategoryType setName(Property\Name $name)
 * @method MapCategoryType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MapCategoryType setSameAs(Property\SameAs $sameAs)
 * @method MapCategoryType setUrl(Property\Url $url)
 */
class MapCategoryType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MapCategoryType';
	}
}