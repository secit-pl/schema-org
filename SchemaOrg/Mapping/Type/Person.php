<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Person.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PersonType instead.
 * 
 * @method Person setAdditionalType(Property\AdditionalType $additionalType)
 * @method Person setAlternateName(Property\AlternateName $alternateName)
 * @method Person setDescription(Property\Description $description)
 * @method Person setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Person setIdentifier(Property\Identifier $identifier)
 * @method Person setImage(Property\Image $image)
 * @method Person setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Person setName(Property\Name $name)
 * @method Person setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Person setSameAs(Property\SameAs $sameAs)
 * @method Person setUrl(Property\Url $url)
 */
class Person extends Thing {

	/**
	 * @var Property\AdditionalName
	 */
	private $additionalName;

	/**
	 * @var Property\Address
	 */
	private $address;

	/**
	 * @var Property\Affiliation
	 */
	private $affiliation;

	/**
	 * @var Property\AlumniOf
	 */
	private $alumniOf;

	/**
	 * @var Property\Award
	 */
	private $award;

	/**
	 * @var Property\BirthDate
	 */
	private $birthDate;

	/**
	 * @var Property\BirthPlace
	 */
	private $birthPlace;

	/**
	 * @var Property\Brand
	 */
	private $brand;

	/**
	 * @var Property\Children
	 */
	private $children;

	/**
	 * @var Property\Colleague
	 */
	private $colleague;

	/**
	 * @var Property\ContactPoint
	 */
	private $contactPoint;

	/**
	 * @var Property\DeathDate
	 */
	private $deathDate;

	/**
	 * @var Property\DeathPlace
	 */
	private $deathPlace;

	/**
	 * @var Property\Duns
	 */
	private $duns;

	/**
	 * @var Property\Email
	 */
	private $email;

	/**
	 * @var Property\FamilyName
	 */
	private $familyName;

	/**
	 * @var Property\FaxNumber
	 */
	private $faxNumber;

	/**
	 * @var Property\Follows
	 */
	private $follows;

	/**
	 * @var Property\Funder
	 */
	private $funder;

	/**
	 * @var Property\Gender
	 */
	private $gender;

	/**
	 * @var Property\GivenName
	 */
	private $givenName;

	/**
	 * @var Property\GlobalLocationNumber
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasOfferCatalog
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HasPOS
	 */
	private $hasPOS;

	/**
	 * @var Property\Height
	 */
	private $height;

	/**
	 * @var Property\HomeLocation
	 */
	private $homeLocation;

	/**
	 * @var Property\HonorificPrefix
	 */
	private $honorificPrefix;

	/**
	 * @var Property\HonorificSuffix
	 */
	private $honorificSuffix;

	/**
	 * @var Property\IsicV4
	 */
	private $isicV4;

	/**
	 * @var Property\JobTitle
	 */
	private $jobTitle;

	/**
	 * @var Property\Knows
	 */
	private $knows;

	/**
	 * @var Property\MakesOffer
	 */
	private $makesOffer;

	/**
	 * @var Property\MemberOf
	 */
	private $memberOf;

	/**
	 * @var Property\Naics
	 */
	private $naics;

	/**
	 * @var Property\Nationality
	 */
	private $nationality;

	/**
	 * @var Property\NetWorth
	 */
	private $netWorth;

	/**
	 * @var Property\Owns
	 */
	private $owns;

	/**
	 * @var Property\Parent
	 */
	private $parent;

	/**
	 * @var Property\PerformerIn
	 */
	private $performerIn;

	/**
	 * @var Property\PublishingPrinciples
	 */
	private $publishingPrinciples;

	/**
	 * @var Property\RelatedTo
	 */
	private $relatedTo;

	/**
	 * @var Property\Seeks
	 */
	private $seeks;

	/**
	 * @var Property\Sibling
	 */
	private $sibling;

	/**
	 * @var Property\Sponsor
	 */
	private $sponsor;

	/**
	 * @var Property\Spouse
	 */
	private $spouse;

	/**
	 * @var Property\TaxID
	 */
	private $taxID;

	/**
	 * @var Property\Telephone
	 */
	private $telephone;

	/**
	 * @var Property\VatID
	 */
	private $vatID;

	/**
	 * @var Property\Weight
	 */
	private $weight;

	/**
	 * @var Property\WorkLocation
	 */
	private $workLocation;

	/**
	 * @var Property\WorksFor
	 */
	private $worksFor;

	/**
	 * Get additional name.
	 * 
	 * @return Property\AdditionalName
	 */
	public function getAdditionalName() {
		return $this->additionalName;
	}

	/**
	 * Get address.
	 * 
	 * @return Property\Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get affiliation.
	 * 
	 * @return Property\Affiliation
	 */
	public function getAffiliation() {
		return $this->affiliation;
	}

	/**
	 * Get alumni of.
	 * 
	 * @return Property\AlumniOf
	 */
	public function getAlumniOf() {
		return $this->alumniOf;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\Award
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get birth date.
	 * 
	 * @return Property\BirthDate
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Get birth place.
	 * 
	 * @return Property\BirthPlace
	 */
	public function getBirthPlace() {
		return $this->birthPlace;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\Brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get children.
	 * 
	 * @return Property\Children
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Get colleague.
	 * 
	 * @return Property\Colleague
	 */
	public function getColleague() {
		return $this->colleague;
	}

	/**
	 * Get contact point.
	 * 
	 * @return Property\ContactPoint
	 */
	public function getContactPoint() {
		return $this->contactPoint;
	}

	/**
	 * Get death date.
	 * 
	 * @return Property\DeathDate
	 */
	public function getDeathDate() {
		return $this->deathDate;
	}

	/**
	 * Get death place.
	 * 
	 * @return Property\DeathPlace
	 */
	public function getDeathPlace() {
		return $this->deathPlace;
	}

	/**
	 * Get duns.
	 * 
	 * @return Property\Duns
	 */
	public function getDuns() {
		return $this->duns;
	}

	/**
	 * Get email.
	 * 
	 * @return Property\Email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get family name.
	 * 
	 * @return Property\FamilyName
	 */
	public function getFamilyName() {
		return $this->familyName;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumber
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get follows.
	 * 
	 * @return Property\Follows
	 */
	public function getFollows() {
		return $this->follows;
	}

	/**
	 * Get funder.
	 * 
	 * @return Property\Funder
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get gender.
	 * 
	 * @return Property\Gender
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Get given name.
	 * 
	 * @return Property\GivenName
	 */
	public function getGivenName() {
		return $this->givenName;
	}

	/**
	 * Get global location number.
	 * 
	 * @return Property\GlobalLocationNumber
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has offer catalog.
	 * 
	 * @return Property\HasOfferCatalog
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
	}

	/**
	 * Get haspos.
	 * 
	 * @return Property\HasPOS
	 */
	public function getHasPOS() {
		return $this->hasPOS;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\Height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get home location.
	 * 
	 * @return Property\HomeLocation
	 */
	public function getHomeLocation() {
		return $this->homeLocation;
	}

	/**
	 * Get honorific prefix.
	 * 
	 * @return Property\HonorificPrefix
	 */
	public function getHonorificPrefix() {
		return $this->honorificPrefix;
	}

	/**
	 * Get honorific suffix.
	 * 
	 * @return Property\HonorificSuffix
	 */
	public function getHonorificSuffix() {
		return $this->honorificSuffix;
	}

	/**
	 * Get isicv4.
	 * 
	 * @return Property\IsicV4
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get job title.
	 * 
	 * @return Property\JobTitle
	 */
	public function getJobTitle() {
		return $this->jobTitle;
	}

	/**
	 * Get knows.
	 * 
	 * @return Property\Knows
	 */
	public function getKnows() {
		return $this->knows;
	}

	/**
	 * Get makes offer.
	 * 
	 * @return Property\MakesOffer
	 */
	public function getMakesOffer() {
		return $this->makesOffer;
	}

	/**
	 * Get member of.
	 * 
	 * @return Property\MemberOf
	 */
	public function getMemberOf() {
		return $this->memberOf;
	}

	/**
	 * Get naics.
	 * 
	 * @return Property\Naics
	 */
	public function getNaics() {
		return $this->naics;
	}

	/**
	 * Get nationality.
	 * 
	 * @return Property\Nationality
	 */
	public function getNationality() {
		return $this->nationality;
	}

	/**
	 * Get net worth.
	 * 
	 * @return Property\NetWorth
	 */
	public function getNetWorth() {
		return $this->netWorth;
	}

	/**
	 * Get owns.
	 * 
	 * @return Property\Owns
	 */
	public function getOwns() {
		return $this->owns;
	}

	/**
	 * Get parent.
	 * 
	 * @return Property\Parent
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Get performer in.
	 * 
	 * @return Property\PerformerIn
	 */
	public function getPerformerIn() {
		return $this->performerIn;
	}

	/**
	 * Get publishing principles.
	 * 
	 * @return Property\PublishingPrinciples
	 */
	public function getPublishingPrinciples() {
		return $this->publishingPrinciples;
	}

	/**
	 * Get related to.
	 * 
	 * @return Property\RelatedTo
	 */
	public function getRelatedTo() {
		return $this->relatedTo;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Person';
	}

	/**
	 * Get seeks.
	 * 
	 * @return Property\Seeks
	 */
	public function getSeeks() {
		return $this->seeks;
	}

	/**
	 * Get sibling.
	 * 
	 * @return Property\Sibling
	 */
	public function getSibling() {
		return $this->sibling;
	}

	/**
	 * Get sponsor.
	 * 
	 * @return Property\Sponsor
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get spouse.
	 * 
	 * @return Property\Spouse
	 */
	public function getSpouse() {
		return $this->spouse;
	}

	/**
	 * Get taxid.
	 * 
	 * @return Property\TaxID
	 */
	public function getTaxID() {
		return $this->taxID;
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\Telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Get vatid.
	 * 
	 * @return Property\VatID
	 */
	public function getVatID() {
		return $this->vatID;
	}

	/**
	 * Get weight.
	 * 
	 * @return Property\Weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Get work location.
	 * 
	 * @return Property\WorkLocation
	 */
	public function getWorkLocation() {
		return $this->workLocation;
	}

	/**
	 * Get works for.
	 * 
	 * @return Property\WorksFor
	 */
	public function getWorksFor() {
		return $this->worksFor;
	}

	/**
	 * Set additional name.
	 * 
	 * @param Property\AdditionalName $additionalName
	 * @return Person
	 */
	public function setAdditionalName(Property\AdditionalName $additionalName) {
		$this->additionalName = $additionalName;

		return $this;
	}

	/**
	 * Set address.
	 * 
	 * @param Property\Address $address
	 * @return Person
	 */
	public function setAddress(Property\Address $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set affiliation.
	 * 
	 * @param Property\Affiliation $affiliation
	 * @return Person
	 */
	public function setAffiliation(Property\Affiliation $affiliation) {
		$this->affiliation = $affiliation;

		return $this;
	}

	/**
	 * Set alumni of.
	 * 
	 * @param Property\AlumniOf $alumniOf
	 * @return Person
	 */
	public function setAlumniOf(Property\AlumniOf $alumniOf) {
		$this->alumniOf = $alumniOf;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\Award $award
	 * @return Person
	 */
	public function setAward(Property\Award $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set birth date.
	 * 
	 * @param Property\BirthDate $birthDate
	 * @return Person
	 */
	public function setBirthDate(Property\BirthDate $birthDate) {
		$this->birthDate = $birthDate;

		return $this;
	}

	/**
	 * Set birth place.
	 * 
	 * @param Property\BirthPlace $birthPlace
	 * @return Person
	 */
	public function setBirthPlace(Property\BirthPlace $birthPlace) {
		$this->birthPlace = $birthPlace;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\Brand $brand
	 * @return Person
	 */
	public function setBrand(Property\Brand $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set children.
	 * 
	 * @param Property\Children $children
	 * @return Person
	 */
	public function setChildren(Property\Children $children) {
		$this->children = $children;

		return $this;
	}

	/**
	 * Set colleague.
	 * 
	 * @param Property\Colleague $colleague
	 * @return Person
	 */
	public function setColleague(Property\Colleague $colleague) {
		$this->colleague = $colleague;

		return $this;
	}

	/**
	 * Set contact point.
	 * 
	 * @param Property\ContactPoint $contactPoint
	 * @return Person
	 */
	public function setContactPoint(Property\ContactPoint $contactPoint) {
		$this->contactPoint = $contactPoint;

		return $this;
	}

	/**
	 * Set death date.
	 * 
	 * @param Property\DeathDate $deathDate
	 * @return Person
	 */
	public function setDeathDate(Property\DeathDate $deathDate) {
		$this->deathDate = $deathDate;

		return $this;
	}

	/**
	 * Set death place.
	 * 
	 * @param Property\DeathPlace $deathPlace
	 * @return Person
	 */
	public function setDeathPlace(Property\DeathPlace $deathPlace) {
		$this->deathPlace = $deathPlace;

		return $this;
	}

	/**
	 * Set duns.
	 * 
	 * @param Property\Duns $duns
	 * @return Person
	 */
	public function setDuns(Property\Duns $duns) {
		$this->duns = $duns;

		return $this;
	}

	/**
	 * Set email.
	 * 
	 * @param Property\Email $email
	 * @return Person
	 */
	public function setEmail(Property\Email $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set family name.
	 * 
	 * @param Property\FamilyName $familyName
	 * @return Person
	 */
	public function setFamilyName(Property\FamilyName $familyName) {
		$this->familyName = $familyName;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumber $faxNumber
	 * @return Person
	 */
	public function setFaxNumber(Property\FaxNumber $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set follows.
	 * 
	 * @param Property\Follows $follows
	 * @return Person
	 */
	public function setFollows(Property\Follows $follows) {
		$this->follows = $follows;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\Funder $funder
	 * @return Person
	 */
	public function setFunder(Property\Funder $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set gender.
	 * 
	 * @param Property\Gender $gender
	 * @return Person
	 */
	public function setGender(Property\Gender $gender) {
		$this->gender = $gender;

		return $this;
	}

	/**
	 * Set given name.
	 * 
	 * @param Property\GivenName $givenName
	 * @return Person
	 */
	public function setGivenName(Property\GivenName $givenName) {
		$this->givenName = $givenName;

		return $this;
	}

	/**
	 * Set global location number.
	 * 
	 * @param Property\GlobalLocationNumber $globalLocationNumber
	 * @return Person
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 * 
	 * @param Property\HasOfferCatalog $hasOfferCatalog
	 * @return Person
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set haspos.
	 * 
	 * @param Property\HasPOS $hasPOS
	 * @return Person
	 */
	public function setHasPOS(Property\HasPOS $hasPOS) {
		$this->hasPOS = $hasPOS;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\Height $height
	 * @return Person
	 */
	public function setHeight(Property\Height $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set home location.
	 * 
	 * @param Property\HomeLocation $homeLocation
	 * @return Person
	 */
	public function setHomeLocation(Property\HomeLocation $homeLocation) {
		$this->homeLocation = $homeLocation;

		return $this;
	}

	/**
	 * Set honorific prefix.
	 * 
	 * @param Property\HonorificPrefix $honorificPrefix
	 * @return Person
	 */
	public function setHonorificPrefix(Property\HonorificPrefix $honorificPrefix) {
		$this->honorificPrefix = $honorificPrefix;

		return $this;
	}

	/**
	 * Set honorific suffix.
	 * 
	 * @param Property\HonorificSuffix $honorificSuffix
	 * @return Person
	 */
	public function setHonorificSuffix(Property\HonorificSuffix $honorificSuffix) {
		$this->honorificSuffix = $honorificSuffix;

		return $this;
	}

	/**
	 * Set isicv4.
	 * 
	 * @param Property\IsicV4 $isicV4
	 * @return Person
	 */
	public function setIsicV4(Property\IsicV4 $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set job title.
	 * 
	 * @param Property\JobTitle $jobTitle
	 * @return Person
	 */
	public function setJobTitle(Property\JobTitle $jobTitle) {
		$this->jobTitle = $jobTitle;

		return $this;
	}

	/**
	 * Set knows.
	 * 
	 * @param Property\Knows $knows
	 * @return Person
	 */
	public function setKnows(Property\Knows $knows) {
		$this->knows = $knows;

		return $this;
	}

	/**
	 * Set makes offer.
	 * 
	 * @param Property\MakesOffer $makesOffer
	 * @return Person
	 */
	public function setMakesOffer(Property\MakesOffer $makesOffer) {
		$this->makesOffer = $makesOffer;

		return $this;
	}

	/**
	 * Set member of.
	 * 
	 * @param Property\MemberOf $memberOf
	 * @return Person
	 */
	public function setMemberOf(Property\MemberOf $memberOf) {
		$this->memberOf = $memberOf;

		return $this;
	}

	/**
	 * Set naics.
	 * 
	 * @param Property\Naics $naics
	 * @return Person
	 */
	public function setNaics(Property\Naics $naics) {
		$this->naics = $naics;

		return $this;
	}

	/**
	 * Set nationality.
	 * 
	 * @param Property\Nationality $nationality
	 * @return Person
	 */
	public function setNationality(Property\Nationality $nationality) {
		$this->nationality = $nationality;

		return $this;
	}

	/**
	 * Set net worth.
	 * 
	 * @param Property\NetWorth $netWorth
	 * @return Person
	 */
	public function setNetWorth(Property\NetWorth $netWorth) {
		$this->netWorth = $netWorth;

		return $this;
	}

	/**
	 * Set owns.
	 * 
	 * @param Property\Owns $owns
	 * @return Person
	 */
	public function setOwns(Property\Owns $owns) {
		$this->owns = $owns;

		return $this;
	}

	/**
	 * Set parent.
	 * 
	 * @param Property\Parent $parent
	 * @return Person
	 */
	public function setParent(Property\Parent $parent) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Set performer in.
	 * 
	 * @param Property\PerformerIn $performerIn
	 * @return Person
	 */
	public function setPerformerIn(Property\PerformerIn $performerIn) {
		$this->performerIn = $performerIn;

		return $this;
	}

	/**
	 * Set publishing principles.
	 * 
	 * @param Property\PublishingPrinciples $publishingPrinciples
	 * @return Person
	 */
	public function setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples) {
		$this->publishingPrinciples = $publishingPrinciples;

		return $this;
	}

	/**
	 * Set related to.
	 * 
	 * @param Property\RelatedTo $relatedTo
	 * @return Person
	 */
	public function setRelatedTo(Property\RelatedTo $relatedTo) {
		$this->relatedTo = $relatedTo;

		return $this;
	}

	/**
	 * Set seeks.
	 * 
	 * @param Property\Seeks $seeks
	 * @return Person
	 */
	public function setSeeks(Property\Seeks $seeks) {
		$this->seeks = $seeks;

		return $this;
	}

	/**
	 * Set sibling.
	 * 
	 * @param Property\Sibling $sibling
	 * @return Person
	 */
	public function setSibling(Property\Sibling $sibling) {
		$this->sibling = $sibling;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\Sponsor $sponsor
	 * @return Person
	 */
	public function setSponsor(Property\Sponsor $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set spouse.
	 * 
	 * @param Property\Spouse $spouse
	 * @return Person
	 */
	public function setSpouse(Property\Spouse $spouse) {
		$this->spouse = $spouse;

		return $this;
	}

	/**
	 * Set taxid.
	 * 
	 * @param Property\TaxID $taxID
	 * @return Person
	 */
	public function setTaxID(Property\TaxID $taxID) {
		$this->taxID = $taxID;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\Telephone $telephone
	 * @return Person
	 */
	public function setTelephone(Property\Telephone $telephone) {
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Set vatid.
	 * 
	 * @param Property\VatID $vatID
	 * @return Person
	 */
	public function setVatID(Property\VatID $vatID) {
		$this->vatID = $vatID;

		return $this;
	}

	/**
	 * Set weight.
	 * 
	 * @param Property\Weight $weight
	 * @return Person
	 */
	public function setWeight(Property\Weight $weight) {
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Set work location.
	 * 
	 * @param Property\WorkLocation $workLocation
	 * @return Person
	 */
	public function setWorkLocation(Property\WorkLocation $workLocation) {
		$this->workLocation = $workLocation;

		return $this;
	}

	/**
	 * Set works for.
	 * 
	 * @param Property\WorksFor $worksFor
	 * @return Person
	 */
	public function setWorksFor(Property\WorksFor $worksFor) {
		$this->worksFor = $worksFor;

		return $this;
	}
}