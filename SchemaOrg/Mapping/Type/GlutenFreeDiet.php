<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GlutenFreeDiet.
 * 
 * @method GlutenFreeDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method GlutenFreeDiet setAlternateName(Property\AlternateName $alternateName)
 * @method GlutenFreeDiet setDescription(Property\Description $description)
 * @method GlutenFreeDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GlutenFreeDiet setImage(Property\Image $image)
 * @method GlutenFreeDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GlutenFreeDiet setName(Property\Name $name)
 * @method GlutenFreeDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GlutenFreeDiet setSameAs(Property\SameAs $sameAs)
 * @method GlutenFreeDiet setUrl(Property\Url $url)
 */
class GlutenFreeDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GlutenFreeDiet';
	}
}