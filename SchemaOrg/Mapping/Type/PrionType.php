<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A prion is an infectious agent composed of protein in a misfolded form.
 * 
 * @method PrionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PrionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PrionType setDescription(Property\DescriptionProperty $description)
 * @method PrionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PrionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PrionType setImage(Property\ImageProperty $image)
 * @method PrionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PrionType setName(Property\NameProperty $name)
 * @method PrionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PrionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PrionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PrionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PrionType setUrl(Property\UrlProperty $url)
 */
class PrionType extends InfectiousAgentClassType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Prion';
	}
}