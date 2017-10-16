<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RightHandDriving.
 * 
 * @method RightHandDriving setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RightHandDriving setAdditionalType(Property\AdditionalType $additionalType)
 * @method RightHandDriving setAlternateName(Property\AlternateName $alternateName)
 * @method RightHandDriving setDescription(Property\Description $description)
 * @method RightHandDriving setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RightHandDriving setEqual(Property\Equal $equal)
 * @method RightHandDriving setGreater(Property\Greater $greater)
 * @method RightHandDriving setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method RightHandDriving setIdentifier(Property\Identifier $identifier)
 * @method RightHandDriving setImage(Property\Image $image)
 * @method RightHandDriving setLesser(Property\Lesser $lesser)
 * @method RightHandDriving setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method RightHandDriving setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RightHandDriving setName(Property\Name $name)
 * @method RightHandDriving setNonEqual(Property\NonEqual $nonEqual)
 * @method RightHandDriving setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RightHandDriving setSameAs(Property\SameAs $sameAs)
 * @method RightHandDriving setUrl(Property\Url $url)
 * @method RightHandDriving setValueReference(Property\ValueReference $valueReference)
 */
class RightHandDriving extends SteeringPositionValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RightHandDriving';
	}
}