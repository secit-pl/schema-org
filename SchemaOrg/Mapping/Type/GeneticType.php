<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to hereditary transmission and the variation of inherited characteristics and disorders.
 * 
 * @method GeneticType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeneticType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeneticType setDescription(Property\DescriptionProperty $description)
 * @method GeneticType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeneticType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeneticType setImage(Property\ImageProperty $image)
 * @method GeneticType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeneticType setName(Property\NameProperty $name)
 * @method GeneticType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeneticType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeneticType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GeneticType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method GeneticType setUrl(Property\UrlProperty $url)
 */
class GeneticType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Genetic';
	}
}