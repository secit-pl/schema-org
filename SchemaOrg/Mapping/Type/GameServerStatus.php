<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GameServerStatus.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GameServerStatusType instead.
 * 
 * @method GameServerStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method GameServerStatus setAlternateName(Property\AlternateName $alternateName)
 * @method GameServerStatus setDescription(Property\Description $description)
 * @method GameServerStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GameServerStatus setIdentifier(Property\Identifier $identifier)
 * @method GameServerStatus setImage(Property\Image $image)
 * @method GameServerStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GameServerStatus setName(Property\Name $name)
 * @method GameServerStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GameServerStatus setSameAs(Property\SameAs $sameAs)
 * @method GameServerStatus setUrl(Property\Url $url)
 */
class GameServerStatus extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GameServerStatus';
	}
}