<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RefurbishedCondition.
 * 
 * @method RefurbishedCondition setAdditionalType(Property\AdditionalType $additionalType)
 * @method RefurbishedCondition setAlternateName(Property\AlternateName $alternateName)
 * @method RefurbishedCondition setDescription(Property\Description $description)
 * @method RefurbishedCondition setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RefurbishedCondition setImage(Property\Image $image)
 * @method RefurbishedCondition setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RefurbishedCondition setName(Property\Name $name)
 * @method RefurbishedCondition setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RefurbishedCondition setSameAs(Property\SameAs $sameAs)
 * @method RefurbishedCondition setUrl(Property\Url $url)
 */
class RefurbishedCondition extends OfferItemCondition {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RefurbishedCondition';
	}
}