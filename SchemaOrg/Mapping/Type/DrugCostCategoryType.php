<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerated categories of medical drug costs.
 * 
 * @method DrugCostCategoryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugCostCategoryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugCostCategoryType setDescription(Property\DescriptionProperty $description)
 * @method DrugCostCategoryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugCostCategoryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugCostCategoryType setImage(Property\ImageProperty $image)
 * @method DrugCostCategoryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugCostCategoryType setName(Property\NameProperty $name)
 * @method DrugCostCategoryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugCostCategoryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugCostCategoryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugCostCategoryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DrugCostCategoryType setUrl(Property\UrlProperty $url)
 */
class DrugCostCategoryType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugCostCategory';
	}
}