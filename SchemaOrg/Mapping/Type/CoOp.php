<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CoOp.
 * 
 * @method CoOp setAdditionalType(Property\AdditionalType $additionalType)
 * @method CoOp setAlternateName(Property\AlternateName $alternateName)
 * @method CoOp setDescription(Property\Description $description)
 * @method CoOp setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CoOp setImage(Property\Image $image)
 * @method CoOp setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CoOp setName(Property\Name $name)
 * @method CoOp setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CoOp setSameAs(Property\SameAs $sameAs)
 * @method CoOp setUrl(Property\Url $url)
 */
class CoOp extends GamePlayMode {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CoOp';
	}
}