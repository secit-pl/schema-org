<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A governmental organization or agency.
 * 
 * @method GovernmentOrganizationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentOrganizationType setAddress(Property\AddressProperty $address)
 * @method GovernmentOrganizationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GovernmentOrganizationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentOrganizationType setAlumni(Property\AlumniProperty $alumni)
 * @method GovernmentOrganizationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GovernmentOrganizationType setAward(Property\AwardProperty $award)
 * @method GovernmentOrganizationType setBrand(Property\BrandProperty $brand)
 * @method GovernmentOrganizationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GovernmentOrganizationType setDepartment(Property\DepartmentProperty $department)
 * @method GovernmentOrganizationType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentOrganizationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentOrganizationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GovernmentOrganizationType setDuns(Property\DunsProperty $duns)
 * @method GovernmentOrganizationType setEmail(Property\EmailProperty $email)
 * @method GovernmentOrganizationType setEmployee(Property\EmployeeProperty $employee)
 * @method GovernmentOrganizationType setEvent(Property\EventProperty $event)
 * @method GovernmentOrganizationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GovernmentOrganizationType setFounder(Property\FounderProperty $founder)
 * @method GovernmentOrganizationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GovernmentOrganizationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GovernmentOrganizationType setFunder(Property\FunderProperty $funder)
 * @method GovernmentOrganizationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GovernmentOrganizationType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GovernmentOrganizationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GovernmentOrganizationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GovernmentOrganizationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentOrganizationType setImage(Property\ImageProperty $image)
 * @method GovernmentOrganizationType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method GovernmentOrganizationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GovernmentOrganizationType setKeywords(Property\KeywordsProperty $keywords)
 * @method GovernmentOrganizationType setLegalName(Property\LegalNameProperty $legalName)
 * @method GovernmentOrganizationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GovernmentOrganizationType setLocation(Property\LocationProperty $location)
 * @method GovernmentOrganizationType setLogo(Property\LogoProperty $logo)
 * @method GovernmentOrganizationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentOrganizationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GovernmentOrganizationType setMember(Property\MemberProperty $member)
 * @method GovernmentOrganizationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GovernmentOrganizationType setNaics(Property\NaicsProperty $naics)
 * @method GovernmentOrganizationType setName(Property\NameProperty $name)
 * @method GovernmentOrganizationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GovernmentOrganizationType setOwns(Property\OwnsProperty $owns)
 * @method GovernmentOrganizationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GovernmentOrganizationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentOrganizationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GovernmentOrganizationType setReview(Property\ReviewProperty $review)
 * @method GovernmentOrganizationType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentOrganizationType setSeeks(Property\SeeksProperty $seeks)
 * @method GovernmentOrganizationType setSlogan(Property\SloganProperty $slogan)
 * @method GovernmentOrganizationType setSponsor(Property\SponsorProperty $sponsor)
 * @method GovernmentOrganizationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GovernmentOrganizationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GovernmentOrganizationType setTaxID(Property\TaxIDProperty $taxID)
 * @method GovernmentOrganizationType setTelephone(Property\TelephoneProperty $telephone)
 * @method GovernmentOrganizationType setUrl(Property\UrlProperty $url)
 * @method GovernmentOrganizationType setVatID(Property\VatIDProperty $vatID)
 */
class GovernmentOrganizationType extends OrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentOrganization';
	}
}