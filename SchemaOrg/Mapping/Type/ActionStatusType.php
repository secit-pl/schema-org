<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActionStatusType.
 * 
 * @method ActionStatusType setAdditionalType(Property\AdditionalType $additionalType)
 * @method ActionStatusType setAlternateName(Property\AlternateName $alternateName)
 * @method ActionStatusType setDescription(Property\Description $description)
 * @method ActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ActionStatusType setImage(Property\Image $image)
 * @method ActionStatusType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ActionStatusType setName(Property\Name $name)
 * @method ActionStatusType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ActionStatusType setSameAs(Property\SameAs $sameAs)
 * @method ActionStatusType setUrl(Property\Url $url)
 */
class ActionStatusType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActionStatusType';
	}
}