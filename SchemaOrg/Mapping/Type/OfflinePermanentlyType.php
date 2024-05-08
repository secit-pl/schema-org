<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Game server status: OfflinePermanently. Server is offline and not available.
 * 
 * @method OfflinePermanentlyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfflinePermanentlyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfflinePermanentlyType setDescription(Property\DescriptionProperty $description)
 * @method OfflinePermanentlyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfflinePermanentlyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfflinePermanentlyType setImage(Property\ImageProperty $image)
 * @method OfflinePermanentlyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfflinePermanentlyType setName(Property\NameProperty $name)
 * @method OfflinePermanentlyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfflinePermanentlyType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfflinePermanentlyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OfflinePermanentlyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OfflinePermanentlyType setUrl(Property\UrlProperty $url)
 */
class OfflinePermanentlyType extends GameServerStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfflinePermanently';
	}
}