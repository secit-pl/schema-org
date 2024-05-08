<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The status of an Action.
 * 
 * @method ActionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActionStatusType setDescription(Property\DescriptionProperty $description)
 * @method ActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActionStatusType setImage(Property\ImageProperty $image)
 * @method ActionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActionStatusType setName(Property\NameProperty $name)
 * @method ActionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActionStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ActionStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ActionStatusType setUrl(Property\UrlProperty $url)
 */
class ActionStatusType extends StatusEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActionStatusType';
	}
}