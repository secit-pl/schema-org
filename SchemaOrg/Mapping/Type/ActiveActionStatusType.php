<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActiveActionStatusType.
 * 
 * @method ActiveActionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActiveActionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActiveActionStatusType setDescription(Property\DescriptionProperty $description)
 * @method ActiveActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActiveActionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActiveActionStatusType setImage(Property\ImageProperty $image)
 * @method ActiveActionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActiveActionStatusType setName(Property\NameProperty $name)
 * @method ActiveActionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActiveActionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActiveActionStatusType setUrl(Property\UrlProperty $url)
 */
class ActiveActionStatusType extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActiveActionStatus';
	}
}