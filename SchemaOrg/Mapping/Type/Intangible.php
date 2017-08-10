<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Intangible.
 * 
 * @method Intangible setAdditionalType(Property\AdditionalType $additionalType)
 * @method Intangible setAlternateName(Property\AlternateName $alternateName)
 * @method Intangible setDescription(Property\Description $description)
 * @method Intangible setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Intangible setImage(Property\Image $image)
 * @method Intangible setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Intangible setName(Property\Name $name)
 * @method Intangible setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Intangible setSameAs(Property\SameAs $sameAs)
 * @method Intangible setUrl(Property\Url $url)
 */
class Intangible extends Thing {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Intangible';
	}
}