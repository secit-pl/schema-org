<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The drug's cost represents the wholesale acquisition cost of the drug.
 * 
 * @method WholesaleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WholesaleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WholesaleType setDescription(Property\DescriptionProperty $description)
 * @method WholesaleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WholesaleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WholesaleType setImage(Property\ImageProperty $image)
 * @method WholesaleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WholesaleType setName(Property\NameProperty $name)
 * @method WholesaleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WholesaleType setSameAs(Property\SameAsProperty $sameAs)
 * @method WholesaleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WholesaleType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method WholesaleType setUrl(Property\UrlProperty $url)
 */
class WholesaleType extends DrugCostCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Wholesale';
	}
}