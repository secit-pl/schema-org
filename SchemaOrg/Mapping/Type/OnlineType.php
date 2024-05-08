<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Game server status: Online. Server is available.
 * 
 * @method OnlineType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OnlineType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OnlineType setDescription(Property\DescriptionProperty $description)
 * @method OnlineType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OnlineType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OnlineType setImage(Property\ImageProperty $image)
 * @method OnlineType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OnlineType setName(Property\NameProperty $name)
 * @method OnlineType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OnlineType setSameAs(Property\SameAsProperty $sameAs)
 * @method OnlineType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OnlineType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OnlineType setUrl(Property\UrlProperty $url)
 */
class OnlineType extends GameServerStatusType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Online';
	}
}