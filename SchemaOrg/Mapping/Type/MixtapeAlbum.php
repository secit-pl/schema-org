<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MixtapeAlbum.
 * 
 * @method MixtapeAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method MixtapeAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method MixtapeAlbum setDescription(Property\Description $description)
 * @method MixtapeAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MixtapeAlbum setImage(Property\Image $image)
 * @method MixtapeAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MixtapeAlbum setName(Property\Name $name)
 * @method MixtapeAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MixtapeAlbum setSameAs(Property\SameAs $sameAs)
 * @method MixtapeAlbum setUrl(Property\Url $url)
 */
class MixtapeAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MixtapeAlbum';
	}
}