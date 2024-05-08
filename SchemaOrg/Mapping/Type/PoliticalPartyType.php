<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Organization: Political Party.
 * 
 * @method PoliticalPartyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PoliticalPartyType setAddress(Property\AddressProperty $address)
 * @method PoliticalPartyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PoliticalPartyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PoliticalPartyType setAlumni(Property\AlumniProperty $alumni)
 * @method PoliticalPartyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PoliticalPartyType setAward(Property\AwardProperty $award)
 * @method PoliticalPartyType setBrand(Property\BrandProperty $brand)
 * @method PoliticalPartyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PoliticalPartyType setDepartment(Property\DepartmentProperty $department)
 * @method PoliticalPartyType setDescription(Property\DescriptionProperty $description)
 * @method PoliticalPartyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PoliticalPartyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PoliticalPartyType setDuns(Property\DunsProperty $duns)
 * @method PoliticalPartyType setEmail(Property\EmailProperty $email)
 * @method PoliticalPartyType setEmployee(Property\EmployeeProperty $employee)
 * @method PoliticalPartyType setEvent(Property\EventProperty $event)
 * @method PoliticalPartyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PoliticalPartyType setFounder(Property\FounderProperty $founder)
 * @method PoliticalPartyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PoliticalPartyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PoliticalPartyType setFunder(Property\FunderProperty $funder)
 * @method PoliticalPartyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PoliticalPartyType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PoliticalPartyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PoliticalPartyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PoliticalPartyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PoliticalPartyType setImage(Property\ImageProperty $image)
 * @method PoliticalPartyType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method PoliticalPartyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PoliticalPartyType setKeywords(Property\KeywordsProperty $keywords)
 * @method PoliticalPartyType setLegalName(Property\LegalNameProperty $legalName)
 * @method PoliticalPartyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PoliticalPartyType setLocation(Property\LocationProperty $location)
 * @method PoliticalPartyType setLogo(Property\LogoProperty $logo)
 * @method PoliticalPartyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PoliticalPartyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PoliticalPartyType setMember(Property\MemberProperty $member)
 * @method PoliticalPartyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PoliticalPartyType setNaics(Property\NaicsProperty $naics)
 * @method PoliticalPartyType setName(Property\NameProperty $name)
 * @method PoliticalPartyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PoliticalPartyType setOwns(Property\OwnsProperty $owns)
 * @method PoliticalPartyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PoliticalPartyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PoliticalPartyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PoliticalPartyType setReview(Property\ReviewProperty $review)
 * @method PoliticalPartyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PoliticalPartyType setSeeks(Property\SeeksProperty $seeks)
 * @method PoliticalPartyType setSlogan(Property\SloganProperty $slogan)
 * @method PoliticalPartyType setSponsor(Property\SponsorProperty $sponsor)
 * @method PoliticalPartyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PoliticalPartyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PoliticalPartyType setTaxID(Property\TaxIDProperty $taxID)
 * @method PoliticalPartyType setTelephone(Property\TelephoneProperty $telephone)
 * @method PoliticalPartyType setUrl(Property\UrlProperty $url)
 * @method PoliticalPartyType setVatID(Property\VatIDProperty $vatID)
 */
class PoliticalPartyType extends OrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PoliticalParty';
	}
}