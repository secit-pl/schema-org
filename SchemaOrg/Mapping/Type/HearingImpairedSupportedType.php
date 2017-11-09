<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HearingImpairedSupportedType.
 * 
 * @method HearingImpairedSupportedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HearingImpairedSupportedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HearingImpairedSupportedType setDescription(Property\DescriptionProperty $description)
 * @method HearingImpairedSupportedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HearingImpairedSupportedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HearingImpairedSupportedType setImage(Property\ImageProperty $image)
 * @method HearingImpairedSupportedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HearingImpairedSupportedType setName(Property\NameProperty $name)
 * @method HearingImpairedSupportedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HearingImpairedSupportedType setSameAs(Property\SameAsProperty $sameAs)
 * @method HearingImpairedSupportedType setUrl(Property\UrlProperty $url)
 */
class HearingImpairedSupportedType extends ContactPointOptionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HearingImpairedSupported';
	}
}