<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An educational organization.
 * 
 * @method EducationalOrganizationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EducationalOrganizationType setAddress(Property\AddressProperty $address)
 * @method EducationalOrganizationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EducationalOrganizationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EducationalOrganizationType setAlumni(Property\AlumniProperty $alumni)
 * @method EducationalOrganizationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method EducationalOrganizationType setAward(Property\AwardProperty $award)
 * @method EducationalOrganizationType setBrand(Property\BrandProperty $brand)
 * @method EducationalOrganizationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method EducationalOrganizationType setDepartment(Property\DepartmentProperty $department)
 * @method EducationalOrganizationType setDescription(Property\DescriptionProperty $description)
 * @method EducationalOrganizationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EducationalOrganizationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method EducationalOrganizationType setDuns(Property\DunsProperty $duns)
 * @method EducationalOrganizationType setEmail(Property\EmailProperty $email)
 * @method EducationalOrganizationType setEmployee(Property\EmployeeProperty $employee)
 * @method EducationalOrganizationType setEvent(Property\EventProperty $event)
 * @method EducationalOrganizationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EducationalOrganizationType setFounder(Property\FounderProperty $founder)
 * @method EducationalOrganizationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method EducationalOrganizationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method EducationalOrganizationType setFunder(Property\FunderProperty $funder)
 * @method EducationalOrganizationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EducationalOrganizationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method EducationalOrganizationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method EducationalOrganizationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method EducationalOrganizationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EducationalOrganizationType setImage(Property\ImageProperty $image)
 * @method EducationalOrganizationType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method EducationalOrganizationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EducationalOrganizationType setKeywords(Property\KeywordsProperty $keywords)
 * @method EducationalOrganizationType setLegalName(Property\LegalNameProperty $legalName)
 * @method EducationalOrganizationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method EducationalOrganizationType setLocation(Property\LocationProperty $location)
 * @method EducationalOrganizationType setLogo(Property\LogoProperty $logo)
 * @method EducationalOrganizationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EducationalOrganizationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method EducationalOrganizationType setMember(Property\MemberProperty $member)
 * @method EducationalOrganizationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method EducationalOrganizationType setNaics(Property\NaicsProperty $naics)
 * @method EducationalOrganizationType setName(Property\NameProperty $name)
 * @method EducationalOrganizationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method EducationalOrganizationType setOwns(Property\OwnsProperty $owns)
 * @method EducationalOrganizationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method EducationalOrganizationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EducationalOrganizationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method EducationalOrganizationType setReview(Property\ReviewProperty $review)
 * @method EducationalOrganizationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EducationalOrganizationType setSeeks(Property\SeeksProperty $seeks)
 * @method EducationalOrganizationType setSlogan(Property\SloganProperty $slogan)
 * @method EducationalOrganizationType setSponsor(Property\SponsorProperty $sponsor)
 * @method EducationalOrganizationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method EducationalOrganizationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EducationalOrganizationType setTaxID(Property\TaxIDProperty $taxID)
 * @method EducationalOrganizationType setTelephone(Property\TelephoneProperty $telephone)
 * @method EducationalOrganizationType setUrl(Property\UrlProperty $url)
 * @method EducationalOrganizationType setVatID(Property\VatIDProperty $vatID)
 */
class EducationalOrganizationType extends OrganizationType {

	/**
	 * @var Property\AlumniProperty
	 */
	private $alumni;

	/**
	 * Get alumni.
	 *
	 * @return Property\AlumniProperty
	 */
	public function getAlumni() {
		return $this->alumni;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EducationalOrganization';
	}

	/**
	 * Set alumni.
	 *
	 * @param Property\AlumniProperty $alumni
	 * @return EducationalOrganizationType
	 */
	public function setAlumni(Property\AlumniProperty $alumni) {
		$this->alumni = $alumni;

		return $this;
	}
}