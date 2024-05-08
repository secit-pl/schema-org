<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of endocrine glands and their secretions.
 * 
 * @method EndocrineType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EndocrineType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EndocrineType setDescription(Property\DescriptionProperty $description)
 * @method EndocrineType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EndocrineType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EndocrineType setImage(Property\ImageProperty $image)
 * @method EndocrineType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EndocrineType setName(Property\NameProperty $name)
 * @method EndocrineType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EndocrineType setSameAs(Property\SameAsProperty $sameAs)
 * @method EndocrineType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EndocrineType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EndocrineType setUrl(Property\UrlProperty $url)
 */
class EndocrineType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Endocrine';
	}
}