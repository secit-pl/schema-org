<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Organization: Sports team.
 * 
 * @method SportsTeamType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsTeamType setAddress(Property\AddressProperty $address)
 * @method SportsTeamType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsTeamType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsTeamType setAlumni(Property\AlumniProperty $alumni)
 * @method SportsTeamType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SportsTeamType setAward(Property\AwardProperty $award)
 * @method SportsTeamType setBrand(Property\BrandProperty $brand)
 * @method SportsTeamType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SportsTeamType setDepartment(Property\DepartmentProperty $department)
 * @method SportsTeamType setDescription(Property\DescriptionProperty $description)
 * @method SportsTeamType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsTeamType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SportsTeamType setDuns(Property\DunsProperty $duns)
 * @method SportsTeamType setEmail(Property\EmailProperty $email)
 * @method SportsTeamType setEmployee(Property\EmployeeProperty $employee)
 * @method SportsTeamType setEvent(Property\EventProperty $event)
 * @method SportsTeamType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsTeamType setFounder(Property\FounderProperty $founder)
 * @method SportsTeamType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SportsTeamType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SportsTeamType setFunder(Property\FunderProperty $funder)
 * @method SportsTeamType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsTeamType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SportsTeamType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SportsTeamType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SportsTeamType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsTeamType setImage(Property\ImageProperty $image)
 * @method SportsTeamType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method SportsTeamType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsTeamType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportsTeamType setLegalName(Property\LegalNameProperty $legalName)
 * @method SportsTeamType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SportsTeamType setLocation(Property\LocationProperty $location)
 * @method SportsTeamType setLogo(Property\LogoProperty $logo)
 * @method SportsTeamType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsTeamType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SportsTeamType setMember(Property\MemberProperty $member)
 * @method SportsTeamType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SportsTeamType setNaics(Property\NaicsProperty $naics)
 * @method SportsTeamType setName(Property\NameProperty $name)
 * @method SportsTeamType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SportsTeamType setOwns(Property\OwnsProperty $owns)
 * @method SportsTeamType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SportsTeamType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsTeamType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SportsTeamType setReview(Property\ReviewProperty $review)
 * @method SportsTeamType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsTeamType setSeeks(Property\SeeksProperty $seeks)
 * @method SportsTeamType setSlogan(Property\SloganProperty $slogan)
 * @method SportsTeamType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportsTeamType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SportsTeamType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportsTeamType setTaxID(Property\TaxIDProperty $taxID)
 * @method SportsTeamType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsTeamType setUrl(Property\UrlProperty $url)
 * @method SportsTeamType setVatID(Property\VatIDProperty $vatID)
 */
class SportsTeamType extends SportsOrganizationType {

	/**
	 * @var Property\AthleteProperty
	 */
	private $athlete;

	/**
	 * @var Property\CoachProperty
	 */
	private $coach;

	/**
	 * Get athlete.
	 *
	 * @return Property\AthleteProperty
	 */
	public function getAthlete() {
		return $this->athlete;
	}

	/**
	 * Get coach.
	 *
	 * @return Property\CoachProperty
	 */
	public function getCoach() {
		return $this->coach;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsTeam';
	}

	/**
	 * Set athlete.
	 *
	 * @param Property\AthleteProperty $athlete
	 * @return SportsTeamType
	 */
	public function setAthlete(Property\AthleteProperty $athlete) {
		$this->athlete = $athlete;

		return $this;
	}

	/**
	 * Set coach.
	 *
	 * @param Property\CoachProperty $coach
	 * @return SportsTeamType
	 */
	public function setCoach(Property\CoachProperty $coach) {
		$this->coach = $coach;

		return $this;
	}
}