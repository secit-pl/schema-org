<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CompilationAlbum.
 * 
 * @method CompilationAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method CompilationAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method CompilationAlbum setDescription(Property\Description $description)
 * @method CompilationAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CompilationAlbum setImage(Property\Image $image)
 * @method CompilationAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CompilationAlbum setName(Property\Name $name)
 * @method CompilationAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CompilationAlbum setSameAs(Property\SameAs $sameAs)
 * @method CompilationAlbum setUrl(Property\Url $url)
 */
class CompilationAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompilationAlbum';
	}
}