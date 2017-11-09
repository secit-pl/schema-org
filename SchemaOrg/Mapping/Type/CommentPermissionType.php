<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommentPermissionType.
 * 
 * @method CommentPermissionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CommentPermissionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CommentPermissionType setDescription(Property\DescriptionProperty $description)
 * @method CommentPermissionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CommentPermissionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CommentPermissionType setImage(Property\ImageProperty $image)
 * @method CommentPermissionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CommentPermissionType setName(Property\NameProperty $name)
 * @method CommentPermissionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CommentPermissionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CommentPermissionType setUrl(Property\UrlProperty $url)
 */
class CommentPermissionType extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CommentPermission';
	}
}