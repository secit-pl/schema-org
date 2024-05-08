<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Play mode: CoOp. Co-operative games, where you play on the same team with friends.
 * 
 * @method CoOpType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CoOpType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CoOpType setDescription(Property\DescriptionProperty $description)
 * @method CoOpType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CoOpType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CoOpType setImage(Property\ImageProperty $image)
 * @method CoOpType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CoOpType setName(Property\NameProperty $name)
 * @method CoOpType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CoOpType setSameAs(Property\SameAsProperty $sameAs)
 * @method CoOpType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CoOpType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CoOpType setUrl(Property\UrlProperty $url)
 */
class CoOpType extends GamePlayModeType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CoOp';
	}
}