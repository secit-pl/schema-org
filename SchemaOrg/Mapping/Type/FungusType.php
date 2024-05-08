<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Pathogenic fungus.
 * 
 * @method FungusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FungusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FungusType setDescription(Property\DescriptionProperty $description)
 * @method FungusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FungusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FungusType setImage(Property\ImageProperty $image)
 * @method FungusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FungusType setName(Property\NameProperty $name)
 * @method FungusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FungusType setSameAs(Property\SameAsProperty $sameAs)
 * @method FungusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FungusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FungusType setUrl(Property\UrlProperty $url)
 */
class FungusType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Fungus';
	}
}