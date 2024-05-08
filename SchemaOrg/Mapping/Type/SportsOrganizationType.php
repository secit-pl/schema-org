<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.
 * 
 * @method SportsOrganizationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsOrganizationType setAddress(Property\AddressProperty $address)
 * @method SportsOrganizationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsOrganizationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsOrganizationType setAlumni(Property\AlumniProperty $alumni)
 * @method SportsOrganizationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SportsOrganizationType setAward(Property\AwardProperty $award)
 * @method SportsOrganizationType setBrand(Property\BrandProperty $brand)
 * @method SportsOrganizationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SportsOrganizationType setDepartment(Property\DepartmentProperty $department)
 * @method SportsOrganizationType setDescription(Property\DescriptionProperty $description)
 * @method SportsOrganizationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsOrganizationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SportsOrganizationType setDuns(Property\DunsProperty $duns)
 * @method SportsOrganizationType setEmail(Property\EmailProperty $email)
 * @method SportsOrganizationType setEmployee(Property\EmployeeProperty $employee)
 * @method SportsOrganizationType setEvent(Property\EventProperty $event)
 * @method SportsOrganizationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsOrganizationType setFounder(Property\FounderProperty $founder)
 * @method SportsOrganizationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SportsOrganizationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SportsOrganizationType setFunder(Property\FunderProperty $funder)
 * @method SportsOrganizationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsOrganizationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SportsOrganizationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SportsOrganizationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SportsOrganizationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsOrganizationType setImage(Property\ImageProperty $image)
 * @method SportsOrganizationType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method SportsOrganizationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsOrganizationType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportsOrganizationType setLegalName(Property\LegalNameProperty $legalName)
 * @method SportsOrganizationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SportsOrganizationType setLocation(Property\LocationProperty $location)
 * @method SportsOrganizationType setLogo(Property\LogoProperty $logo)
 * @method SportsOrganizationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsOrganizationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SportsOrganizationType setMember(Property\MemberProperty $member)
 * @method SportsOrganizationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SportsOrganizationType setNaics(Property\NaicsProperty $naics)
 * @method SportsOrganizationType setName(Property\NameProperty $name)
 * @method SportsOrganizationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SportsOrganizationType setOwns(Property\OwnsProperty $owns)
 * @method SportsOrganizationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SportsOrganizationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsOrganizationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SportsOrganizationType setReview(Property\ReviewProperty $review)
 * @method SportsOrganizationType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsOrganizationType setSeeks(Property\SeeksProperty $seeks)
 * @method SportsOrganizationType setSlogan(Property\SloganProperty $slogan)
 * @method SportsOrganizationType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportsOrganizationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SportsOrganizationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportsOrganizationType setTaxID(Property\TaxIDProperty $taxID)
 * @method SportsOrganizationType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsOrganizationType setUrl(Property\UrlProperty $url)
 * @method SportsOrganizationType setVatID(Property\VatIDProperty $vatID)
 */
class SportsOrganizationType extends OrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsOrganization';
	}
}