<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The drug's cost represents the maximum reimbursement paid by an insurer for the drug.
 * 
 * @method ReimbursementCapType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReimbursementCapType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReimbursementCapType setDescription(Property\DescriptionProperty $description)
 * @method ReimbursementCapType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReimbursementCapType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReimbursementCapType setImage(Property\ImageProperty $image)
 * @method ReimbursementCapType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReimbursementCapType setName(Property\NameProperty $name)
 * @method ReimbursementCapType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReimbursementCapType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReimbursementCapType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReimbursementCapType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ReimbursementCapType setUrl(Property\UrlProperty $url)
 */
class ReimbursementCapType extends DrugCostCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReimbursementCap';
	}
}