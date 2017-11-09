<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicGroupType.
 * 
 * @method MusicGroupType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicGroupType setAddress(Property\AddressProperty $address)
 * @method MusicGroupType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MusicGroupType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicGroupType setAlumni(Property\AlumniProperty $alumni)
 * @method MusicGroupType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MusicGroupType setAward(Property\AwardProperty $award)
 * @method MusicGroupType setBrand(Property\BrandProperty $brand)
 * @method MusicGroupType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MusicGroupType setDepartment(Property\DepartmentProperty $department)
 * @method MusicGroupType setDescription(Property\DescriptionProperty $description)
 * @method MusicGroupType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicGroupType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MusicGroupType setDuns(Property\DunsProperty $duns)
 * @method MusicGroupType setEmail(Property\EmailProperty $email)
 * @method MusicGroupType setEmployee(Property\EmployeeProperty $employee)
 * @method MusicGroupType setEvent(Property\EventProperty $event)
 * @method MusicGroupType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MusicGroupType setFounder(Property\FounderProperty $founder)
 * @method MusicGroupType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MusicGroupType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MusicGroupType setFunder(Property\FunderProperty $funder)
 * @method MusicGroupType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MusicGroupType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MusicGroupType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MusicGroupType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicGroupType setImage(Property\ImageProperty $image)
 * @method MusicGroupType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MusicGroupType setLegalName(Property\LegalNameProperty $legalName)
 * @method MusicGroupType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MusicGroupType setLocation(Property\LocationProperty $location)
 * @method MusicGroupType setLogo(Property\LogoProperty $logo)
 * @method MusicGroupType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicGroupType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MusicGroupType setMember(Property\MemberProperty $member)
 * @method MusicGroupType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MusicGroupType setNaics(Property\NaicsProperty $naics)
 * @method MusicGroupType setName(Property\NameProperty $name)
 * @method MusicGroupType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MusicGroupType setOwns(Property\OwnsProperty $owns)
 * @method MusicGroupType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MusicGroupType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicGroupType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MusicGroupType setReview(Property\ReviewProperty $review)
 * @method MusicGroupType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicGroupType setSeeks(Property\SeeksProperty $seeks)
 * @method MusicGroupType setSponsor(Property\SponsorProperty $sponsor)
 * @method MusicGroupType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MusicGroupType setTaxID(Property\TaxIDProperty $taxID)
 * @method MusicGroupType setTelephone(Property\TelephoneProperty $telephone)
 * @method MusicGroupType setUrl(Property\UrlProperty $url)
 * @method MusicGroupType setVatID(Property\VatIDProperty $vatID)
 */
class MusicGroupType extends PerformingGroupType {

	/**
	 * @var Property\AlbumProperty
	 */
	private $album;

	/**
	 * @var Property\GenreProperty
	 */
	private $genre;

	/**
	 * @var Property\TrackProperty
	 */
	private $track;

	/**
	 * Get album.
	 * 
	 * @return Property\AlbumProperty
	 */
	public function getAlbum() {
		return $this->album;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\GenreProperty
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
	 * @return Property\TrackProperty
	 */
	public function getTrack() {
		return $this->track;
	}

	/**
	 * Set album.
	 * 
	 * @param Property\AlbumProperty $album
	 * @return MusicGroupType
	 */
	public function setAlbum(Property\AlbumProperty $album) {
		$this->album = $album;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\GenreProperty $genre
	 * @return MusicGroupType
	 */
	public function setGenre(Property\GenreProperty $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set track.
	 * 
	 * @param Property\TrackProperty $track
	 * @return MusicGroupType
	 */
	public function setTrack(Property\TrackProperty $track) {
		$this->track = $track;

		return $this;
	}
}