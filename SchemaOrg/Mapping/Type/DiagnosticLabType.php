<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical laboratory that offers on-site or off-site diagnostic services.
 * 
 * @method DiagnosticLabType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiagnosticLabType setAddress(Property\AddressProperty $address)
 * @method DiagnosticLabType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DiagnosticLabType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiagnosticLabType setAlumni(Property\AlumniProperty $alumni)
 * @method DiagnosticLabType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DiagnosticLabType setAward(Property\AwardProperty $award)
 * @method DiagnosticLabType setBrand(Property\BrandProperty $brand)
 * @method DiagnosticLabType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method DiagnosticLabType setDepartment(Property\DepartmentProperty $department)
 * @method DiagnosticLabType setDescription(Property\DescriptionProperty $description)
 * @method DiagnosticLabType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiagnosticLabType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method DiagnosticLabType setDuns(Property\DunsProperty $duns)
 * @method DiagnosticLabType setEmail(Property\EmailProperty $email)
 * @method DiagnosticLabType setEmployee(Property\EmployeeProperty $employee)
 * @method DiagnosticLabType setEvent(Property\EventProperty $event)
 * @method DiagnosticLabType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DiagnosticLabType setFounder(Property\FounderProperty $founder)
 * @method DiagnosticLabType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method DiagnosticLabType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method DiagnosticLabType setFunder(Property\FunderProperty $funder)
 * @method DiagnosticLabType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DiagnosticLabType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DiagnosticLabType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DiagnosticLabType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method DiagnosticLabType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiagnosticLabType setImage(Property\ImageProperty $image)
 * @method DiagnosticLabType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method DiagnosticLabType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DiagnosticLabType setKeywords(Property\KeywordsProperty $keywords)
 * @method DiagnosticLabType setLegalName(Property\LegalNameProperty $legalName)
 * @method DiagnosticLabType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method DiagnosticLabType setLocation(Property\LocationProperty $location)
 * @method DiagnosticLabType setLogo(Property\LogoProperty $logo)
 * @method DiagnosticLabType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiagnosticLabType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method DiagnosticLabType setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty)
 * @method DiagnosticLabType setMember(Property\MemberProperty $member)
 * @method DiagnosticLabType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method DiagnosticLabType setNaics(Property\NaicsProperty $naics)
 * @method DiagnosticLabType setName(Property\NameProperty $name)
 * @method DiagnosticLabType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method DiagnosticLabType setOwns(Property\OwnsProperty $owns)
 * @method DiagnosticLabType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method DiagnosticLabType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiagnosticLabType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method DiagnosticLabType setReview(Property\ReviewProperty $review)
 * @method DiagnosticLabType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiagnosticLabType setSeeks(Property\SeeksProperty $seeks)
 * @method DiagnosticLabType setSlogan(Property\SloganProperty $slogan)
 * @method DiagnosticLabType setSponsor(Property\SponsorProperty $sponsor)
 * @method DiagnosticLabType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method DiagnosticLabType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DiagnosticLabType setTaxID(Property\TaxIDProperty $taxID)
 * @method DiagnosticLabType setTelephone(Property\TelephoneProperty $telephone)
 * @method DiagnosticLabType setUrl(Property\UrlProperty $url)
 * @method DiagnosticLabType setVatID(Property\VatIDProperty $vatID)
 */
class DiagnosticLabType extends MedicalOrganizationType {

	/**
	 * @var Property\AvailableTestProperty
	 */
	private $availableTest;

	/**
	 * Get available test.
	 *
	 * @return Property\AvailableTestProperty
	 */
	public function getAvailableTest() {
		return $this->availableTest;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiagnosticLab';
	}

	/**
	 * Set available test.
	 *
	 * @param Property\AvailableTestProperty $availableTest
	 * @return DiagnosticLabType
	 */
	public function setAvailableTest(Property\AvailableTestProperty $availableTest) {
		$this->availableTest = $availableTest;

		return $this;
	}
}