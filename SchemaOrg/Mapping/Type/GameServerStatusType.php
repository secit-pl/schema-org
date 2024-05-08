<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Status of a game server.
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
 * @method GameServerStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GameServerStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GameServerStatusType setUrl(Property\UrlProperty $url)
 */
class GameServerStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GameServerStatus';
	}
}