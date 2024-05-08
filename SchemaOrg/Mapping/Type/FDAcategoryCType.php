<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation by the US FDA signifying that animal reproduction studies have shown an adverse effect on the fetus and there are no adequate and well-controlled studies in humans, but potential benefits may warrant use of the drug in pregnant women despite potential risks.
 * 
 * @method FDAcategoryCType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAcategoryCType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAcategoryCType setDescription(Property\DescriptionProperty $description)
 * @method FDAcategoryCType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAcategoryCType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAcategoryCType setImage(Property\ImageProperty $image)
 * @method FDAcategoryCType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAcategoryCType setName(Property\NameProperty $name)
 * @method FDAcategoryCType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAcategoryCType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAcategoryCType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAcategoryCType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAcategoryCType setUrl(Property\UrlProperty $url)
 */
class FDAcategoryCType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAcategoryC';
	}
}