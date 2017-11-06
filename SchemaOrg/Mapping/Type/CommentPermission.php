<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommentPermission.
 * 
 * @method CommentPermission setAdditionalType(Property\AdditionalType $additionalType)
 * @method CommentPermission setAlternateName(Property\AlternateName $alternateName)
 * @method CommentPermission setDescription(Property\Description $description)
 * @method CommentPermission setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CommentPermission setIdentifier(Property\Identifier $identifier)
 * @method CommentPermission setImage(Property\Image $image)
 * @method CommentPermission setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CommentPermission setName(Property\Name $name)
 * @method CommentPermission setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CommentPermission setSameAs(Property\SameAs $sameAs)
 * @method CommentPermission setUrl(Property\Url $url)
 */
class CommentPermission extends DigitalDocumentPermissionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CommentPermission';
	}
}