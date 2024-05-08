<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Dietetics and nutrition as a medical specialty.
 * 
 * @method DietNutritionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DietNutritionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DietNutritionType setDescription(Property\DescriptionProperty $description)
 * @method DietNutritionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DietNutritionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DietNutritionType setImage(Property\ImageProperty $image)
 * @method DietNutritionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DietNutritionType setName(Property\NameProperty $name)
 * @method DietNutritionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DietNutritionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DietNutritionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DietNutritionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DietNutritionType setUrl(Property\UrlProperty $url)
 */
class DietNutritionType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DietNutrition';
	}
}