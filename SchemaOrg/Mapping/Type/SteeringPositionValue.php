<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SteeringPositionValue.
 * 
 * @method SteeringPositionValue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SteeringPositionValue setAdditionalType(Property\AdditionalType $additionalType)
 * @method SteeringPositionValue setAlternateName(Property\AlternateName $alternateName)
 * @method SteeringPositionValue setDescription(Property\Description $description)
 * @method SteeringPositionValue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SteeringPositionValue setEqual(Property\Equal $equal)
 * @method SteeringPositionValue setGreater(Property\Greater $greater)
 * @method SteeringPositionValue setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method SteeringPositionValue setImage(Property\Image $image)
 * @method SteeringPositionValue setLesser(Property\Lesser $lesser)
 * @method SteeringPositionValue setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method SteeringPositionValue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SteeringPositionValue setName(Property\Name $name)
 * @method SteeringPositionValue setNonEqual(Property\NonEqual $nonEqual)
 * @method SteeringPositionValue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SteeringPositionValue setSameAs(Property\SameAs $sameAs)
 * @method SteeringPositionValue setUrl(Property\Url $url)
 * @method SteeringPositionValue setValueReference(Property\ValueReference $valueReference)
 */
class SteeringPositionValue extends QualitativeValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SteeringPositionValue';
	}
}