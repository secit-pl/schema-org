<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CompilationAlbumType.
 * 
 * @method CompilationAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CompilationAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CompilationAlbumType setDescription(Property\DescriptionProperty $description)
 * @method CompilationAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CompilationAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CompilationAlbumType setImage(Property\ImageProperty $image)
 * @method CompilationAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CompilationAlbumType setName(Property\NameProperty $name)
 * @method CompilationAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CompilationAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method CompilationAlbumType setUrl(Property\UrlProperty $url)
 */
class CompilationAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompilationAlbum';
	}
}