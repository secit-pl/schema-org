<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComedyClubType.
 * 
 * @method ComedyClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComedyClubType setAddress(Property\AddressProperty $address)
 * @method ComedyClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComedyClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComedyClubType setAlumni(Property\AlumniProperty $alumni)
 * @method ComedyClubType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ComedyClubType setAward(Property\AwardProperty $award)
 * @method ComedyClubType setBrand(Property\BrandProperty $brand)
 * @method ComedyClubType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ComedyClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ComedyClubType setDepartment(Property\DepartmentProperty $department)
 * @method ComedyClubType setDescription(Property\DescriptionProperty $description)
 * @method ComedyClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComedyClubType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ComedyClubType setDuns(Property\DunsProperty $duns)
 * @method ComedyClubType setEmail(Property\EmailProperty $email)
 * @method ComedyClubType setEmployee(Property\EmployeeProperty $employee)
 * @method ComedyClubType setEvent(Property\EventProperty $event)
 * @method ComedyClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ComedyClubType setFounder(Property\FounderProperty $founder)
 * @method ComedyClubType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ComedyClubType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ComedyClubType setFunder(Property\FunderProperty $funder)
 * @method ComedyClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ComedyClubType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ComedyClubType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ComedyClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComedyClubType setImage(Property\ImageProperty $image)
 * @method ComedyClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ComedyClubType setLegalName(Property\LegalNameProperty $legalName)
 * @method ComedyClubType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ComedyClubType setLocation(Property\LocationProperty $location)
 * @method ComedyClubType setLogo(Property\LogoProperty $logo)
 * @method ComedyClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComedyClubType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ComedyClubType setMember(Property\MemberProperty $member)
 * @method ComedyClubType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ComedyClubType setNaics(Property\NaicsProperty $naics)
 * @method ComedyClubType setName(Property\NameProperty $name)
 * @method ComedyClubType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ComedyClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ComedyClubType setOwns(Property\OwnsProperty $owns)
 * @method ComedyClubType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ComedyClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ComedyClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComedyClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ComedyClubType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ComedyClubType setReview(Property\ReviewProperty $review)
 * @method ComedyClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComedyClubType setSeeks(Property\SeeksProperty $seeks)
 * @method ComedyClubType setSponsor(Property\SponsorProperty $sponsor)
 * @method ComedyClubType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ComedyClubType setTaxID(Property\TaxIDProperty $taxID)
 * @method ComedyClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method ComedyClubType setUrl(Property\UrlProperty $url)
 * @method ComedyClubType setVatID(Property\VatIDProperty $vatID)
 */
class ComedyClubType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComedyClub';
	}
}