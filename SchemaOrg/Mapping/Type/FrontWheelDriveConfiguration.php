<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FrontWheelDriveConfiguration.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FrontWheelDriveConfigurationType instead.
 * 
 * @method FrontWheelDriveConfiguration setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FrontWheelDriveConfiguration setAdditionalType(Property\AdditionalType $additionalType)
 * @method FrontWheelDriveConfiguration setAlternateName(Property\AlternateName $alternateName)
 * @method FrontWheelDriveConfiguration setDescription(Property\Description $description)
 * @method FrontWheelDriveConfiguration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FrontWheelDriveConfiguration setEqual(Property\Equal $equal)
 * @method FrontWheelDriveConfiguration setGreater(Property\Greater $greater)
 * @method FrontWheelDriveConfiguration setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method FrontWheelDriveConfiguration setIdentifier(Property\Identifier $identifier)
 * @method FrontWheelDriveConfiguration setImage(Property\Image $image)
 * @method FrontWheelDriveConfiguration setLesser(Property\Lesser $lesser)
 * @method FrontWheelDriveConfiguration setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method FrontWheelDriveConfiguration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FrontWheelDriveConfiguration setName(Property\Name $name)
 * @method FrontWheelDriveConfiguration setNonEqual(Property\NonEqual $nonEqual)
 * @method FrontWheelDriveConfiguration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FrontWheelDriveConfiguration setSameAs(Property\SameAs $sameAs)
 * @method FrontWheelDriveConfiguration setUrl(Property\Url $url)
 * @method FrontWheelDriveConfiguration setValueReference(Property\ValueReference $valueReference)
 */
class FrontWheelDriveConfiguration extends DriveWheelConfigurationValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FrontWheelDriveConfiguration';
	}
}