<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GlutenFreeDietType.
 * 
 * @method GlutenFreeDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GlutenFreeDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GlutenFreeDietType setDescription(Property\DescriptionProperty $description)
 * @method GlutenFreeDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GlutenFreeDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GlutenFreeDietType setImage(Property\ImageProperty $image)
 * @method GlutenFreeDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GlutenFreeDietType setName(Property\NameProperty $name)
 * @method GlutenFreeDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GlutenFreeDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method GlutenFreeDietType setUrl(Property\UrlProperty $url)
 */
class GlutenFreeDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GlutenFreeDiet';
	}
}