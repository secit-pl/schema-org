<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to the study of the kidneys and its respective disease states.
 * 
 * @method RenalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RenalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RenalType setDescription(Property\DescriptionProperty $description)
 * @method RenalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RenalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RenalType setImage(Property\ImageProperty $image)
 * @method RenalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RenalType setName(Property\NameProperty $name)
 * @method RenalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RenalType setSameAs(Property\SameAsProperty $sameAs)
 * @method RenalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RenalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RenalType setUrl(Property\UrlProperty $url)
 */
class RenalType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Renal';
	}
}