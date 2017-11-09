<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RearWheelDriveConfiguration.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RearWheelDriveConfigurationType instead.
 * 
 * @method RearWheelDriveConfiguration setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RearWheelDriveConfiguration setAdditionalType(Property\AdditionalType $additionalType)
 * @method RearWheelDriveConfiguration setAlternateName(Property\AlternateName $alternateName)
 * @method RearWheelDriveConfiguration setDescription(Property\Description $description)
 * @method RearWheelDriveConfiguration setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RearWheelDriveConfiguration setEqual(Property\Equal $equal)
 * @method RearWheelDriveConfiguration setGreater(Property\Greater $greater)
 * @method RearWheelDriveConfiguration setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method RearWheelDriveConfiguration setIdentifier(Property\Identifier $identifier)
 * @method RearWheelDriveConfiguration setImage(Property\Image $image)
 * @method RearWheelDriveConfiguration setLesser(Property\Lesser $lesser)
 * @method RearWheelDriveConfiguration setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method RearWheelDriveConfiguration setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RearWheelDriveConfiguration setName(Property\Name $name)
 * @method RearWheelDriveConfiguration setNonEqual(Property\NonEqual $nonEqual)
 * @method RearWheelDriveConfiguration setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RearWheelDriveConfiguration setSameAs(Property\SameAs $sameAs)
 * @method RearWheelDriveConfiguration setUrl(Property\Url $url)
 * @method RearWheelDriveConfiguration setValueReference(Property\ValueReference $valueReference)
 */
class RearWheelDriveConfiguration extends DriveWheelConfigurationValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RearWheelDriveConfiguration';
	}
}