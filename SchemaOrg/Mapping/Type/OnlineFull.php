<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnlineFull.
 * 
 * @method OnlineFull setAdditionalType(Property\AdditionalType $additionalType)
 * @method OnlineFull setAlternateName(Property\AlternateName $alternateName)
 * @method OnlineFull setDescription(Property\Description $description)
 * @method OnlineFull setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OnlineFull setImage(Property\Image $image)
 * @method OnlineFull setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OnlineFull setName(Property\Name $name)
 * @method OnlineFull setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OnlineFull setSameAs(Property\SameAs $sameAs)
 * @method OnlineFull setUrl(Property\Url $url)
 */
class OnlineFull extends GameServerStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnlineFull';
	}
}