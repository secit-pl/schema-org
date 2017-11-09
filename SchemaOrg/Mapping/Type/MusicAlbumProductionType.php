<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicAlbumProductionType.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MusicAlbumProductionType instead.
 * 
 * @method MusicAlbumProductionType setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicAlbumProductionType setAlternateName(Property\AlternateName $alternateName)
 * @method MusicAlbumProductionType setDescription(Property\Description $description)
 * @method MusicAlbumProductionType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicAlbumProductionType setIdentifier(Property\Identifier $identifier)
 * @method MusicAlbumProductionType setImage(Property\Image $image)
 * @method MusicAlbumProductionType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicAlbumProductionType setName(Property\Name $name)
 * @method MusicAlbumProductionType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicAlbumProductionType setSameAs(Property\SameAs $sameAs)
 * @method MusicAlbumProductionType setUrl(Property\Url $url)
 */
class MusicAlbumProductionType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicAlbumProductionType';
	}
}