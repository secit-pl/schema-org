<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation by the US FDA signifying that animal reproduction studies have failed to demonstrate a risk to the fetus and there are no adequate and well-controlled studies in pregnant women.
 * 
 * @method FDAcategoryBType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAcategoryBType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAcategoryBType setDescription(Property\DescriptionProperty $description)
 * @method FDAcategoryBType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAcategoryBType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAcategoryBType setImage(Property\ImageProperty $image)
 * @method FDAcategoryBType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAcategoryBType setName(Property\NameProperty $name)
 * @method FDAcategoryBType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAcategoryBType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAcategoryBType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAcategoryBType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAcategoryBType setUrl(Property\UrlProperty $url)
 */
class FDAcategoryBType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAcategoryB';
	}
}