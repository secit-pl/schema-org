<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates whether this game is multi-player, co-op or single-player.
 * 
 * @method GamePlayModeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GamePlayModeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GamePlayModeType setDescription(Property\DescriptionProperty $description)
 * @method GamePlayModeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GamePlayModeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GamePlayModeType setImage(Property\ImageProperty $image)
 * @method GamePlayModeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GamePlayModeType setName(Property\NameProperty $name)
 * @method GamePlayModeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GamePlayModeType setSameAs(Property\SameAsProperty $sameAs)
 * @method GamePlayModeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GamePlayModeType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GamePlayModeType setUrl(Property\UrlProperty $url)
 */
class GamePlayModeType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GamePlayMode';
	}
}