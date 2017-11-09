<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GameServerStatusType.
 * 
 * @method GameServerStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GameServerStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GameServerStatusType setDescription(Property\DescriptionProperty $description)
 * @method GameServerStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GameServerStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GameServerStatusType setImage(Property\ImageProperty $image)
 * @method GameServerStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GameServerStatusType setName(Property\NameProperty $name)
 * @method GameServerStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GameServerStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method GameServerStatusType setUrl(Property\UrlProperty $url)
 */
class GameServerStatusType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GameServerStatus';
	}
}