<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AllWheelDriveConfiguration.
 * 
 * @method AllWheelDriveConfiguration setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AllWheelDriveConfiguration setAdditionalType(Property\AdditionalType $additionalType)
 * @method AllWheelDriveConfiguration setAlternateName(Property\AlternateName $alternateName)
 * @method AllWheelDriveConfiguration setDescription(Property\Description $description)
 * @method AllWheelDriveConfiguration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AllWheelDriveConfiguration setEqual(Property\Equal $equal)
 * @method AllWheelDriveConfiguration setGreater(Property\Greater $greater)
 * @method AllWheelDriveConfiguration setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method AllWheelDriveConfiguration setImage(Property\Image $image)
 * @method AllWheelDriveConfiguration setLesser(Property\Lesser $lesser)
 * @method AllWheelDriveConfiguration setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method AllWheelDriveConfiguration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AllWheelDriveConfiguration setName(Property\Name $name)
 * @method AllWheelDriveConfiguration setNonEqual(Property\NonEqual $nonEqual)
 * @method AllWheelDriveConfiguration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AllWheelDriveConfiguration setSameAs(Property\SameAs $sameAs)
 * @method AllWheelDriveConfiguration setUrl(Property\Url $url)
 * @method AllWheelDriveConfiguration setValueReference(Property\ValueReference $valueReference)
 */
class AllWheelDriveConfiguration extends DriveWheelConfigurationValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AllWheelDriveConfiguration';
	}
}