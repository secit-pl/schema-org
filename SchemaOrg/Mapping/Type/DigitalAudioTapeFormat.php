<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalAudioTapeFormat.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DigitalAudioTapeFormatType instead.
 * 
 * @method DigitalAudioTapeFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method DigitalAudioTapeFormat setAlternateName(Property\AlternateName $alternateName)
 * @method DigitalAudioTapeFormat setDescription(Property\Description $description)
 * @method DigitalAudioTapeFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DigitalAudioTapeFormat setIdentifier(Property\Identifier $identifier)
 * @method DigitalAudioTapeFormat setImage(Property\Image $image)
 * @method DigitalAudioTapeFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DigitalAudioTapeFormat setName(Property\Name $name)
 * @method DigitalAudioTapeFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DigitalAudioTapeFormat setSameAs(Property\SameAs $sameAs)
 * @method DigitalAudioTapeFormat setUrl(Property\Url $url)
 */
class DigitalAudioTapeFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalAudioTapeFormat';
	}
}