<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FourWheelDriveConfiguration.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FourWheelDriveConfigurationType instead.
 * 
 * @method FourWheelDriveConfiguration setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FourWheelDriveConfiguration setAdditionalType(Property\AdditionalType $additionalType)
 * @method FourWheelDriveConfiguration setAlternateName(Property\AlternateName $alternateName)
 * @method FourWheelDriveConfiguration setDescription(Property\Description $description)
 * @method FourWheelDriveConfiguration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FourWheelDriveConfiguration setEqual(Property\Equal $equal)
 * @method FourWheelDriveConfiguration setGreater(Property\Greater $greater)
 * @method FourWheelDriveConfiguration setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method FourWheelDriveConfiguration setIdentifier(Property\Identifier $identifier)
 * @method FourWheelDriveConfiguration setImage(Property\Image $image)
 * @method FourWheelDriveConfiguration setLesser(Property\Lesser $lesser)
 * @method FourWheelDriveConfiguration setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method FourWheelDriveConfiguration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FourWheelDriveConfiguration setName(Property\Name $name)
 * @method FourWheelDriveConfiguration setNonEqual(Property\NonEqual $nonEqual)
 * @method FourWheelDriveConfiguration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FourWheelDriveConfiguration setSameAs(Property\SameAs $sameAs)
 * @method FourWheelDriveConfiguration setUrl(Property\Url $url)
 * @method FourWheelDriveConfiguration setValueReference(Property\ValueReference $valueReference)
 */
class FourWheelDriveConfiguration extends DriveWheelConfigurationValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FourWheelDriveConfiguration';
	}
}