<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Play mode: MultiPlayer. Requiring or allowing multiple human players to play simultaneously.
 * 
 * @method MultiPlayerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MultiPlayerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MultiPlayerType setDescription(Property\DescriptionProperty $description)
 * @method MultiPlayerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MultiPlayerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MultiPlayerType setImage(Property\ImageProperty $image)
 * @method MultiPlayerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MultiPlayerType setName(Property\NameProperty $name)
 * @method MultiPlayerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MultiPlayerType setSameAs(Property\SameAsProperty $sameAs)
 * @method MultiPlayerType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MultiPlayerType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MultiPlayerType setUrl(Property\UrlProperty $url)
 */
class MultiPlayerType extends GamePlayModeType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MultiPlayer';
	}
}