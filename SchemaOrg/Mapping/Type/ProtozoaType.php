<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Single-celled organism that causes an infection.
 * 
 * @method ProtozoaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProtozoaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProtozoaType setDescription(Property\DescriptionProperty $description)
 * @method ProtozoaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProtozoaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProtozoaType setImage(Property\ImageProperty $image)
 * @method ProtozoaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProtozoaType setName(Property\NameProperty $name)
 * @method ProtozoaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProtozoaType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProtozoaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ProtozoaType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ProtozoaType setUrl(Property\UrlProperty $url)
 */
class ProtozoaType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Protozoa';
	}
}