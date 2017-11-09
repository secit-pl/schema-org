<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DriveWheelConfigurationValue.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DriveWheelConfigurationValueType instead.
 * 
 * @method DriveWheelConfigurationValue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DriveWheelConfigurationValue setAdditionalType(Property\AdditionalType $additionalType)
 * @method DriveWheelConfigurationValue setAlternateName(Property\AlternateName $alternateName)
 * @method DriveWheelConfigurationValue setDescription(Property\Description $description)
 * @method DriveWheelConfigurationValue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DriveWheelConfigurationValue setEqual(Property\Equal $equal)
 * @method DriveWheelConfigurationValue setGreater(Property\Greater $greater)
 * @method DriveWheelConfigurationValue setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method DriveWheelConfigurationValue setIdentifier(Property\Identifier $identifier)
 * @method DriveWheelConfigurationValue setImage(Property\Image $image)
 * @method DriveWheelConfigurationValue setLesser(Property\Lesser $lesser)
 * @method DriveWheelConfigurationValue setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method DriveWheelConfigurationValue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DriveWheelConfigurationValue setName(Property\Name $name)
 * @method DriveWheelConfigurationValue setNonEqual(Property\NonEqual $nonEqual)
 * @method DriveWheelConfigurationValue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DriveWheelConfigurationValue setSameAs(Property\SameAs $sameAs)
 * @method DriveWheelConfigurationValue setUrl(Property\Url $url)
 * @method DriveWheelConfigurationValue setValueReference(Property\ValueReference $valueReference)
 */
class DriveWheelConfigurationValue extends QualitativeValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DriveWheelConfigurationValue';
	}
}