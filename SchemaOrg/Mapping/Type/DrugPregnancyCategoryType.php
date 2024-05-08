<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Categories that represent an assessment of the risk of fetal injury due to a drug or pharmaceutical used as directed by the mother during pregnancy.
 * 
 * @method DrugPregnancyCategoryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugPregnancyCategoryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugPregnancyCategoryType setDescription(Property\DescriptionProperty $description)
 * @method DrugPregnancyCategoryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugPregnancyCategoryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugPregnancyCategoryType setImage(Property\ImageProperty $image)
 * @method DrugPregnancyCategoryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugPregnancyCategoryType setName(Property\NameProperty $name)
 * @method DrugPregnancyCategoryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugPregnancyCategoryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugPregnancyCategoryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugPregnancyCategoryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DrugPregnancyCategoryType setUrl(Property\UrlProperty $url)
 */
class DrugPregnancyCategoryType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugPregnancyCategory';
	}
}