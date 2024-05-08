<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation by the US FDA signifying that studies in animals or humans have demonstrated fetal abnormalities and/or there is positive evidence of human fetal risk based on adverse reaction data from investigational or marketing experience, and the risks involved in use of the drug in pregnant women clearly outweigh potential benefits.
 * 
 * @method FDAcategoryXType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAcategoryXType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAcategoryXType setDescription(Property\DescriptionProperty $description)
 * @method FDAcategoryXType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAcategoryXType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAcategoryXType setImage(Property\ImageProperty $image)
 * @method FDAcategoryXType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAcategoryXType setName(Property\NameProperty $name)
 * @method FDAcategoryXType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAcategoryXType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAcategoryXType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAcategoryXType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAcategoryXType setUrl(Property\UrlProperty $url)
 */
class FDAcategoryXType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAcategoryX';
	}
}