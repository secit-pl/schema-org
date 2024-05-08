<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An action that has already taken place.
 * 
 * @method CompletedActionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CompletedActionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CompletedActionStatusType setDescription(Property\DescriptionProperty $description)
 * @method CompletedActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CompletedActionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CompletedActionStatusType setImage(Property\ImageProperty $image)
 * @method CompletedActionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CompletedActionStatusType setName(Property\NameProperty $name)
 * @method CompletedActionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CompletedActionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method CompletedActionStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CompletedActionStatusType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CompletedActionStatusType setUrl(Property\UrlProperty $url)
 */
class CompletedActionStatusType extends ActionStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompletedActionStatus';
	}
}