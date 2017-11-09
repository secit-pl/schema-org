<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PersonType.
 * 
 * @method PersonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PersonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PersonType setDescription(Property\DescriptionProperty $description)
 * @method PersonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PersonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PersonType setImage(Property\ImageProperty $image)
 * @method PersonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PersonType setName(Property\NameProperty $name)
 * @method PersonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PersonType setSameAs(Property\SameAsProperty $sameAs)
 * @method PersonType setUrl(Property\UrlProperty $url)
 */
class PersonType extends ThingType {

	/**
	 * @var Property\AdditionalNameProperty
	 */
	private $additionalName;

	/**
	 * @var Property\AddressProperty
	 */
	private $address;

	/**
	 * @var Property\AffiliationProperty
	 */
	private $affiliation;

	/**
	 * @var Property\AlumniOfProperty
	 */
	private $alumniOf;

	/**
	 * @var Property\AwardProperty
	 */
	private $award;

	/**
	 * @var Property\BirthDateProperty
	 */
	private $birthDate;

	/**
	 * @var Property\BirthPlaceProperty
	 */
	private $birthPlace;

	/**
	 * @var Property\BrandProperty
	 */
	private $brand;

	/**
	 * @var Property\ChildrenProperty
	 */
	private $children;

	/**
	 * @var Property\ColleagueProperty
	 */
	private $colleague;

	/**
	 * @var Property\ContactPointProperty
	 */
	private $contactPoint;

	/**
	 * @var Property\DeathDateProperty
	 */
	private $deathDate;

	/**
	 * @var Property\DeathPlaceProperty
	 */
	private $deathPlace;

	/**
	 * @var Property\DunsProperty
	 */
	private $duns;

	/**
	 * @var Property\EmailProperty
	 */
	private $email;

	/**
	 * @var Property\FamilyNameProperty
	 */
	private $familyName;

	/**
	 * @var Property\FaxNumberProperty
	 */
	private $faxNumber;

	/**
	 * @var Property\FollowsProperty
	 */
	private $follows;

	/**
	 * @var Property\FunderProperty
	 */
	private $funder;

	/**
	 * @var Property\GenderProperty
	 */
	private $gender;

	/**
	 * @var Property\GivenNameProperty
	 */
	private $givenName;

	/**
	 * @var Property\GlobalLocationNumberProperty
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasOfferCatalogProperty
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HasPOSProperty
	 */
	private $hasPOS;

	/**
	 * @var Property\HeightProperty
	 */
	private $height;

	/**
	 * @var Property\HomeLocationProperty
	 */
	private $homeLocation;

	/**
	 * @var Property\HonorificPrefixProperty
	 */
	private $honorificPrefix;

	/**
	 * @var Property\HonorificSuffixProperty
	 */
	private $honorificSuffix;

	/**
	 * @var Property\IsicV4Property
	 */
	private $isicV4;

	/**
	 * @var Property\JobTitleProperty
	 */
	private $jobTitle;

	/**
	 * @var Property\KnowsProperty
	 */
	private $knows;

	/**
	 * @var Property\MakesOfferProperty
	 */
	private $makesOffer;

	/**
	 * @var Property\MemberOfProperty
	 */
	private $memberOf;

	/**
	 * @var Property\NaicsProperty
	 */
	private $naics;

	/**
	 * @var Property\NationalityProperty
	 */
	private $nationality;

	/**
	 * @var Property\NetWorthProperty
	 */
	private $netWorth;

	/**
	 * @var Property\OwnsProperty
	 */
	private $owns;

	/**
	 * @var Property\ParentProperty
	 */
	private $parent;

	/**
	 * @var Property\PerformerInProperty
	 */
	private $performerIn;

	/**
	 * @var Property\PublishingPrinciplesProperty
	 */
	private $publishingPrinciples;

	/**
	 * @var Property\RelatedToProperty
	 */
	private $relatedTo;

	/**
	 * @var Property\SeeksProperty
	 */
	private $seeks;

	/**
	 * @var Property\SiblingProperty
	 */
	private $sibling;

	/**
	 * @var Property\SponsorProperty
	 */
	private $sponsor;

	/**
	 * @var Property\SpouseProperty
	 */
	private $spouse;

	/**
	 * @var Property\TaxIDProperty
	 */
	private $taxID;

	/**
	 * @var Property\TelephoneProperty
	 */
	private $telephone;

	/**
	 * @var Property\VatIDProperty
	 */
	private $vatID;

	/**
	 * @var Property\WeightProperty
	 */
	private $weight;

	/**
	 * @var Property\WorkLocationProperty
	 */
	private $workLocation;

	/**
	 * @var Property\WorksForProperty
	 */
	private $worksFor;

	/**
	 * Get additional name.
	 * 
	 * @return Property\AdditionalNameProperty
	 */
	public function getAdditionalName() {
		return $this->additionalName;
	}

	/**
	 * Get address.
	 * 
	 * @return Property\AddressProperty
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get affiliation.
	 * 
	 * @return Property\AffiliationProperty
	 */
	public function getAffiliation() {
		return $this->affiliation;
	}

	/**
	 * Get alumni of.
	 * 
	 * @return Property\AlumniOfProperty
	 */
	public function getAlumniOf() {
		return $this->alumniOf;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\AwardProperty
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get birth date.
	 * 
	 * @return Property\BirthDateProperty
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Get birth place.
	 * 
	 * @return Property\BirthPlaceProperty
	 */
	public function getBirthPlace() {
		return $this->birthPlace;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\BrandProperty
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get children.
	 * 
	 * @return Property\ChildrenProperty
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Get colleague.
	 * 
	 * @return Property\ColleagueProperty
	 */
	public function getColleague() {
		return $this->colleague;
	}

	/**
	 * Get contact point.
	 * 
	 * @return Property\ContactPointProperty
	 */
	public function getContactPoint() {
		return $this->contactPoint;
	}

	/**
	 * Get death date.
	 * 
	 * @return Property\DeathDateProperty
	 */
	public function getDeathDate() {
		return $this->deathDate;
	}

	/**
	 * Get death place.
	 * 
	 * @return Property\DeathPlaceProperty
	 */
	public function getDeathPlace() {
		return $this->deathPlace;
	}

	/**
	 * Get duns.
	 * 
	 * @return Property\DunsProperty
	 */
	public function getDuns() {
		return $this->duns;
	}

	/**
	 * Get email.
	 * 
	 * @return Property\EmailProperty
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get family name.
	 * 
	 * @return Property\FamilyNameProperty
	 */
	public function getFamilyName() {
		return $this->familyName;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumberProperty
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get follows.
	 * 
	 * @return Property\FollowsProperty
	 */
	public function getFollows() {
		return $this->follows;
	}

	/**
	 * Get funder.
	 * 
	 * @return Property\FunderProperty
	 */
	public function getFunder() {
		return $this->funder;
	}

	/**
	 * Get gender.
	 * 
	 * @return Property\GenderProperty
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * Get given name.
	 * 
	 * @return Property\GivenNameProperty
	 */
	public function getGivenName() {
		return $this->givenName;
	}

	/**
	 * Get global location number.
	 * 
	 * @return Property\GlobalLocationNumberProperty
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has offer catalog.
	 * 
	 * @return Property\HasOfferCatalogProperty
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
	}

	/**
	 * Get haspos.
	 * 
	 * @return Property\HasPOSProperty
	 */
	public function getHasPOS() {
		return $this->hasPOS;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\HeightProperty
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get home location.
	 * 
	 * @return Property\HomeLocationProperty
	 */
	public function getHomeLocation() {
		return $this->homeLocation;
	}

	/**
	 * Get honorific prefix.
	 * 
	 * @return Property\HonorificPrefixProperty
	 */
	public function getHonorificPrefix() {
		return $this->honorificPrefix;
	}

	/**
	 * Get honorific suffix.
	 * 
	 * @return Property\HonorificSuffixProperty
	 */
	public function getHonorificSuffix() {
		return $this->honorificSuffix;
	}

	/**
	 * Get isicv4.
	 * 
	 * @return Property\IsicV4Property
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get job title.
	 * 
	 * @return Property\JobTitleProperty
	 */
	public function getJobTitle() {
		return $this->jobTitle;
	}

	/**
	 * Get knows.
	 * 
	 * @return Property\KnowsProperty
	 */
	public function getKnows() {
		return $this->knows;
	}

	/**
	 * Get makes offer.
	 * 
	 * @return Property\MakesOfferProperty
	 */
	public function getMakesOffer() {
		return $this->makesOffer;
	}

	/**
	 * Get member of.
	 * 
	 * @return Property\MemberOfProperty
	 */
	public function getMemberOf() {
		return $this->memberOf;
	}

	/**
	 * Get naics.
	 * 
	 * @return Property\NaicsProperty
	 */
	public function getNaics() {
		return $this->naics;
	}

	/**
	 * Get nationality.
	 * 
	 * @return Property\NationalityProperty
	 */
	public function getNationality() {
		return $this->nationality;
	}

	/**
	 * Get net worth.
	 * 
	 * @return Property\NetWorthProperty
	 */
	public function getNetWorth() {
		return $this->netWorth;
	}

	/**
	 * Get owns.
	 * 
	 * @return Property\OwnsProperty
	 */
	public function getOwns() {
		return $this->owns;
	}

	/**
	 * Get parent.
	 * 
	 * @return Property\ParentProperty
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Get performer in.
	 * 
	 * @return Property\PerformerInProperty
	 */
	public function getPerformerIn() {
		return $this->performerIn;
	}

	/**
	 * Get publishing principles.
	 * 
	 * @return Property\PublishingPrinciplesProperty
	 */
	public function getPublishingPrinciples() {
		return $this->publishingPrinciples;
	}

	/**
	 * Get related to.
	 * 
	 * @return Property\RelatedToProperty
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
	 * @return Property\SeeksProperty
	 */
	public function getSeeks() {
		return $this->seeks;
	}

	/**
	 * Get sibling.
	 * 
	 * @return Property\SiblingProperty
	 */
	public function getSibling() {
		return $this->sibling;
	}

	/**
	 * Get sponsor.
	 * 
	 * @return Property\SponsorProperty
	 */
	public function getSponsor() {
		return $this->sponsor;
	}

	/**
	 * Get spouse.
	 * 
	 * @return Property\SpouseProperty
	 */
	public function getSpouse() {
		return $this->spouse;
	}

	/**
	 * Get taxid.
	 * 
	 * @return Property\TaxIDProperty
	 */
	public function getTaxID() {
		return $this->taxID;
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\TelephoneProperty
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Get vatid.
	 * 
	 * @return Property\VatIDProperty
	 */
	public function getVatID() {
		return $this->vatID;
	}

	/**
	 * Get weight.
	 * 
	 * @return Property\WeightProperty
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Get work location.
	 * 
	 * @return Property\WorkLocationProperty
	 */
	public function getWorkLocation() {
		return $this->workLocation;
	}

	/**
	 * Get works for.
	 * 
	 * @return Property\WorksForProperty
	 */
	public function getWorksFor() {
		return $this->worksFor;
	}

	/**
	 * Set additional name.
	 * 
	 * @param Property\AdditionalNameProperty $additionalName
	 * @return PersonType
	 */
	public function setAdditionalName(Property\AdditionalNameProperty $additionalName) {
		$this->additionalName = $additionalName;

		return $this;
	}

	/**
	 * Set address.
	 * 
	 * @param Property\AddressProperty $address
	 * @return PersonType
	 */
	public function setAddress(Property\AddressProperty $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set affiliation.
	 * 
	 * @param Property\AffiliationProperty $affiliation
	 * @return PersonType
	 */
	public function setAffiliation(Property\AffiliationProperty $affiliation) {
		$this->affiliation = $affiliation;

		return $this;
	}

	/**
	 * Set alumni of.
	 * 
	 * @param Property\AlumniOfProperty $alumniOf
	 * @return PersonType
	 */
	public function setAlumniOf(Property\AlumniOfProperty $alumniOf) {
		$this->alumniOf = $alumniOf;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\AwardProperty $award
	 * @return PersonType
	 */
	public function setAward(Property\AwardProperty $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set birth date.
	 * 
	 * @param Property\BirthDateProperty $birthDate
	 * @return PersonType
	 */
	public function setBirthDate(Property\BirthDateProperty $birthDate) {
		$this->birthDate = $birthDate;

		return $this;
	}

	/**
	 * Set birth place.
	 * 
	 * @param Property\BirthPlaceProperty $birthPlace
	 * @return PersonType
	 */
	public function setBirthPlace(Property\BirthPlaceProperty $birthPlace) {
		$this->birthPlace = $birthPlace;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\BrandProperty $brand
	 * @return PersonType
	 */
	public function setBrand(Property\BrandProperty $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set children.
	 * 
	 * @param Property\ChildrenProperty $children
	 * @return PersonType
	 */
	public function setChildren(Property\ChildrenProperty $children) {
		$this->children = $children;

		return $this;
	}

	/**
	 * Set colleague.
	 * 
	 * @param Property\ColleagueProperty $colleague
	 * @return PersonType
	 */
	public function setColleague(Property\ColleagueProperty $colleague) {
		$this->colleague = $colleague;

		return $this;
	}

	/**
	 * Set contact point.
	 * 
	 * @param Property\ContactPointProperty $contactPoint
	 * @return PersonType
	 */
	public function setContactPoint(Property\ContactPointProperty $contactPoint) {
		$this->contactPoint = $contactPoint;

		return $this;
	}

	/**
	 * Set death date.
	 * 
	 * @param Property\DeathDateProperty $deathDate
	 * @return PersonType
	 */
	public function setDeathDate(Property\DeathDateProperty $deathDate) {
		$this->deathDate = $deathDate;

		return $this;
	}

	/**
	 * Set death place.
	 * 
	 * @param Property\DeathPlaceProperty $deathPlace
	 * @return PersonType
	 */
	public function setDeathPlace(Property\DeathPlaceProperty $deathPlace) {
		$this->deathPlace = $deathPlace;

		return $this;
	}

	/**
	 * Set duns.
	 * 
	 * @param Property\DunsProperty $duns
	 * @return PersonType
	 */
	public function setDuns(Property\DunsProperty $duns) {
		$this->duns = $duns;

		return $this;
	}

	/**
	 * Set email.
	 * 
	 * @param Property\EmailProperty $email
	 * @return PersonType
	 */
	public function setEmail(Property\EmailProperty $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set family name.
	 * 
	 * @param Property\FamilyNameProperty $familyName
	 * @return PersonType
	 */
	public function setFamilyName(Property\FamilyNameProperty $familyName) {
		$this->familyName = $familyName;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumberProperty $faxNumber
	 * @return PersonType
	 */
	public function setFaxNumber(Property\FaxNumberProperty $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set follows.
	 * 
	 * @param Property\FollowsProperty $follows
	 * @return PersonType
	 */
	public function setFollows(Property\FollowsProperty $follows) {
		$this->follows = $follows;

		return $this;
	}

	/**
	 * Set funder.
	 * 
	 * @param Property\FunderProperty $funder
	 * @return PersonType
	 */
	public function setFunder(Property\FunderProperty $funder) {
		$this->funder = $funder;

		return $this;
	}

	/**
	 * Set gender.
	 * 
	 * @param Property\GenderProperty $gender
	 * @return PersonType
	 */
	public function setGender(Property\GenderProperty $gender) {
		$this->gender = $gender;

		return $this;
	}

	/**
	 * Set given name.
	 * 
	 * @param Property\GivenNameProperty $givenName
	 * @return PersonType
	 */
	public function setGivenName(Property\GivenNameProperty $givenName) {
		$this->givenName = $givenName;

		return $this;
	}

	/**
	 * Set global location number.
	 * 
	 * @param Property\GlobalLocationNumberProperty $globalLocationNumber
	 * @return PersonType
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 * 
	 * @param Property\HasOfferCatalogProperty $hasOfferCatalog
	 * @return PersonType
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set haspos.
	 * 
	 * @param Property\HasPOSProperty $hasPOS
	 * @return PersonType
	 */
	public function setHasPOS(Property\HasPOSProperty $hasPOS) {
		$this->hasPOS = $hasPOS;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\HeightProperty $height
	 * @return PersonType
	 */
	public function setHeight(Property\HeightProperty $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set home location.
	 * 
	 * @param Property\HomeLocationProperty $homeLocation
	 * @return PersonType
	 */
	public function setHomeLocation(Property\HomeLocationProperty $homeLocation) {
		$this->homeLocation = $homeLocation;

		return $this;
	}

	/**
	 * Set honorific prefix.
	 * 
	 * @param Property\HonorificPrefixProperty $honorificPrefix
	 * @return PersonType
	 */
	public function setHonorificPrefix(Property\HonorificPrefixProperty $honorificPrefix) {
		$this->honorificPrefix = $honorificPrefix;

		return $this;
	}

	/**
	 * Set honorific suffix.
	 * 
	 * @param Property\HonorificSuffixProperty $honorificSuffix
	 * @return PersonType
	 */
	public function setHonorificSuffix(Property\HonorificSuffixProperty $honorificSuffix) {
		$this->honorificSuffix = $honorificSuffix;

		return $this;
	}

	/**
	 * Set isicv4.
	 * 
	 * @param Property\IsicV4Property $isicV4
	 * @return PersonType
	 */
	public function setIsicV4(Property\IsicV4Property $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set job title.
	 * 
	 * @param Property\JobTitleProperty $jobTitle
	 * @return PersonType
	 */
	public function setJobTitle(Property\JobTitleProperty $jobTitle) {
		$this->jobTitle = $jobTitle;

		return $this;
	}

	/**
	 * Set knows.
	 * 
	 * @param Property\KnowsProperty $knows
	 * @return PersonType
	 */
	public function setKnows(Property\KnowsProperty $knows) {
		$this->knows = $knows;

		return $this;
	}

	/**
	 * Set makes offer.
	 * 
	 * @param Property\MakesOfferProperty $makesOffer
	 * @return PersonType
	 */
	public function setMakesOffer(Property\MakesOfferProperty $makesOffer) {
		$this->makesOffer = $makesOffer;

		return $this;
	}

	/**
	 * Set member of.
	 * 
	 * @param Property\MemberOfProperty $memberOf
	 * @return PersonType
	 */
	public function setMemberOf(Property\MemberOfProperty $memberOf) {
		$this->memberOf = $memberOf;

		return $this;
	}

	/**
	 * Set naics.
	 * 
	 * @param Property\NaicsProperty $naics
	 * @return PersonType
	 */
	public function setNaics(Property\NaicsProperty $naics) {
		$this->naics = $naics;

		return $this;
	}

	/**
	 * Set nationality.
	 * 
	 * @param Property\NationalityProperty $nationality
	 * @return PersonType
	 */
	public function setNationality(Property\NationalityProperty $nationality) {
		$this->nationality = $nationality;

		return $this;
	}

	/**
	 * Set net worth.
	 * 
	 * @param Property\NetWorthProperty $netWorth
	 * @return PersonType
	 */
	public function setNetWorth(Property\NetWorthProperty $netWorth) {
		$this->netWorth = $netWorth;

		return $this;
	}

	/**
	 * Set owns.
	 * 
	 * @param Property\OwnsProperty $owns
	 * @return PersonType
	 */
	public function setOwns(Property\OwnsProperty $owns) {
		$this->owns = $owns;

		return $this;
	}

	/**
	 * Set parent.
	 * 
	 * @param Property\ParentProperty $parent
	 * @return PersonType
	 */
	public function setParent(Property\ParentProperty $parent) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Set performer in.
	 * 
	 * @param Property\PerformerInProperty $performerIn
	 * @return PersonType
	 */
	public function setPerformerIn(Property\PerformerInProperty $performerIn) {
		$this->performerIn = $performerIn;

		return $this;
	}

	/**
	 * Set publishing principles.
	 * 
	 * @param Property\PublishingPrinciplesProperty $publishingPrinciples
	 * @return PersonType
	 */
	public function setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples) {
		$this->publishingPrinciples = $publishingPrinciples;

		return $this;
	}

	/**
	 * Set related to.
	 * 
	 * @param Property\RelatedToProperty $relatedTo
	 * @return PersonType
	 */
	public function setRelatedTo(Property\RelatedToProperty $relatedTo) {
		$this->relatedTo = $relatedTo;

		return $this;
	}

	/**
	 * Set seeks.
	 * 
	 * @param Property\SeeksProperty $seeks
	 * @return PersonType
	 */
	public function setSeeks(Property\SeeksProperty $seeks) {
		$this->seeks = $seeks;

		return $this;
	}

	/**
	 * Set sibling.
	 * 
	 * @param Property\SiblingProperty $sibling
	 * @return PersonType
	 */
	public function setSibling(Property\SiblingProperty $sibling) {
		$this->sibling = $sibling;

		return $this;
	}

	/**
	 * Set sponsor.
	 * 
	 * @param Property\SponsorProperty $sponsor
	 * @return PersonType
	 */
	public function setSponsor(Property\SponsorProperty $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set spouse.
	 * 
	 * @param Property\SpouseProperty $spouse
	 * @return PersonType
	 */
	public function setSpouse(Property\SpouseProperty $spouse) {
		$this->spouse = $spouse;

		return $this;
	}

	/**
	 * Set taxid.
	 * 
	 * @param Property\TaxIDProperty $taxID
	 * @return PersonType
	 */
	public function setTaxID(Property\TaxIDProperty $taxID) {
		$this->taxID = $taxID;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\TelephoneProperty $telephone
	 * @return PersonType
	 */
	public function setTelephone(Property\TelephoneProperty $telephone) {
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Set vatid.
	 * 
	 * @param Property\VatIDProperty $vatID
	 * @return PersonType
	 */
	public function setVatID(Property\VatIDProperty $vatID) {
		$this->vatID = $vatID;

		return $this;
	}

	/**
	 * Set weight.
	 * 
	 * @param Property\WeightProperty $weight
	 * @return PersonType
	 */
	public function setWeight(Property\WeightProperty $weight) {
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Set work location.
	 * 
	 * @param Property\WorkLocationProperty $workLocation
	 * @return PersonType
	 */
	public function setWorkLocation(Property\WorkLocationProperty $workLocation) {
		$this->workLocation = $workLocation;

		return $this;
	}

	/**
	 * Set works for.
	 * 
	 * @param Property\WorksForProperty $worksFor
	 * @return PersonType
	 */
	public function setWorksFor(Property\WorksForProperty $worksFor) {
		$this->worksFor = $worksFor;

		return $this;
	}
}