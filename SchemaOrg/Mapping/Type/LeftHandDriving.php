<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LeftHandDriving.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LeftHandDrivingType instead.
 * 
 * @method LeftHandDriving setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LeftHandDriving setAdditionalType(Property\AdditionalType $additionalType)
 * @method LeftHandDriving setAlternateName(Property\AlternateName $alternateName)
 * @method LeftHandDriving setDescription(Property\Description $description)
 * @method LeftHandDriving setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LeftHandDriving setEqual(Property\Equal $equal)
 * @method LeftHandDriving setGreater(Property\Greater $greater)
 * @method LeftHandDriving setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method LeftHandDriving setIdentifier(Property\Identifier $identifier)
 * @method LeftHandDriving setImage(Property\Image $image)
 * @method LeftHandDriving setLesser(Property\Lesser $lesser)
 * @method LeftHandDriving setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method LeftHandDriving setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LeftHandDriving setName(Property\Name $name)
 * @method LeftHandDriving setNonEqual(Property\NonEqual $nonEqual)
 * @method LeftHandDriving setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LeftHandDriving setSameAs(Property\SameAs $sameAs)
 * @method LeftHandDriving setUrl(Property\Url $url)
 * @method LeftHandDriving setValueReference(Property\ValueReference $valueReference)
 */
class LeftHandDriving extends SteeringPositionValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LeftHandDriving';
	}
}