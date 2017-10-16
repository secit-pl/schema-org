<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicGroup.
 * 
 * @method MusicGroup setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicGroup setAddress(Property\Address $address)
 * @method MusicGroup setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicGroup setAlternateName(Property\AlternateName $alternateName)
 * @method MusicGroup setAlumni(Property\Alumni $alumni)
 * @method MusicGroup setAreaServed(Property\AreaServed $areaServed)
 * @method MusicGroup setAward(Property\Award $award)
 * @method MusicGroup setBrand(Property\Brand $brand)
 * @method MusicGroup setContactPoint(Property\ContactPoint $contactPoint)
 * @method MusicGroup setDepartment(Property\Department $department)
 * @method MusicGroup setDescription(Property\Description $description)
 * @method MusicGroup setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicGroup setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MusicGroup setDuns(Property\Duns $duns)
 * @method MusicGroup setEmail(Property\Email $email)
 * @method MusicGroup setEmployee(Property\Employee $employee)
 * @method MusicGroup setEvent(Property\Event $event)
 * @method MusicGroup setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MusicGroup setFounder(Property\Founder $founder)
 * @method MusicGroup setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MusicGroup setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MusicGroup setFunder(Property\Funder $funder)
 * @method MusicGroup setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MusicGroup setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MusicGroup setHasPOS(Property\HasPOS $hasPOS)
 * @method MusicGroup setIdentifier(Property\Identifier $identifier)
 * @method MusicGroup setImage(Property\Image $image)
 * @method MusicGroup setIsicV4(Property\IsicV4 $isicV4)
 * @method MusicGroup setLegalName(Property\LegalName $legalName)
 * @method MusicGroup setLeiCode(Property\LeiCode $leiCode)
 * @method MusicGroup setLocation(Property\Location $location)
 * @method MusicGroup setLogo(Property\Logo $logo)
 * @method MusicGroup setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicGroup setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MusicGroup setMember(Property\Member $member)
 * @method MusicGroup setMemberOf(Property\MemberOf $memberOf)
 * @method MusicGroup setNaics(Property\Naics $naics)
 * @method MusicGroup setName(Property\Name $name)
 * @method MusicGroup setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MusicGroup setOwns(Property\Owns $owns)
 * @method MusicGroup setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MusicGroup setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicGroup setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MusicGroup setReview(Property\Review $review)
 * @method MusicGroup setSameAs(Property\SameAs $sameAs)
 * @method MusicGroup setSeeks(Property\Seeks $seeks)
 * @method MusicGroup setSponsor(Property\Sponsor $sponsor)
 * @method MusicGroup setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MusicGroup setTaxID(Property\TaxID $taxID)
 * @method MusicGroup setTelephone(Property\Telephone $telephone)
 * @method MusicGroup setUrl(Property\Url $url)
 * @method MusicGroup setVatID(Property\VatID $vatID)
 */
class MusicGroup extends PerformingGroup {

	/**
	 * @var Property\Album
	 */
	private $album;

	/**
	 * @var Property\Genre
	 */
	private $genre;

	/**
	 * @var Property\Track
	 */
	private $track;

	/**
	 * Get album.
	 * 
	 * @return Property\Album
	 */
	public function getAlbum() {
		return $this->album;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\Genre
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicGroup';
	}

	/**
	 * Get track.
	 * 
	 * @return Property\Track
	 */
	public function getTrack() {
		return $this->track;
	}

	/**
	 * Set album.
	 * 
	 * @param Property\Album $album
	 * @return MusicGroup
	 */
	public function setAlbum(Property\Album $album) {
		$this->album = $album;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\Genre $genre
	 * @return MusicGroup
	 */
	public function setGenre(Property\Genre $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set track.
	 * 
	 * @param Property\Track $track
	 * @return MusicGroup
	 */
	public function setTrack(Property\Track $track) {
		$this->track = $track;

		return $this;
	}
}