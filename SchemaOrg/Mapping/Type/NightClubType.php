<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NightClubType.
 * 
 * @method NightClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NightClubType setAddress(Property\AddressProperty $address)
 * @method NightClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NightClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NightClubType setAlumni(Property\AlumniProperty $alumni)
 * @method NightClubType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method NightClubType setAward(Property\AwardProperty $award)
 * @method NightClubType setBrand(Property\BrandProperty $brand)
 * @method NightClubType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method NightClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NightClubType setDepartment(Property\DepartmentProperty $department)
 * @method NightClubType setDescription(Property\DescriptionProperty $description)
 * @method NightClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NightClubType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method NightClubType setDuns(Property\DunsProperty $duns)
 * @method NightClubType setEmail(Property\EmailProperty $email)
 * @method NightClubType setEmployee(Property\EmployeeProperty $employee)
 * @method NightClubType setEvent(Property\EventProperty $event)
 * @method NightClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NightClubType setFounder(Property\FounderProperty $founder)
 * @method NightClubType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method NightClubType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method NightClubType setFunder(Property\FunderProperty $funder)
 * @method NightClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NightClubType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method NightClubType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method NightClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NightClubType setImage(Property\ImageProperty $image)
 * @method NightClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NightClubType setLegalName(Property\LegalNameProperty $legalName)
 * @method NightClubType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method NightClubType setLocation(Property\LocationProperty $location)
 * @method NightClubType setLogo(Property\LogoProperty $logo)
 * @method NightClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NightClubType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method NightClubType setMember(Property\MemberProperty $member)
 * @method NightClubType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method NightClubType setNaics(Property\NaicsProperty $naics)
 * @method NightClubType setName(Property\NameProperty $name)
 * @method NightClubType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method NightClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NightClubType setOwns(Property\OwnsProperty $owns)
 * @method NightClubType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method NightClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NightClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NightClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NightClubType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method NightClubType setReview(Property\ReviewProperty $review)
 * @method NightClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method NightClubType setSeeks(Property\SeeksProperty $seeks)
 * @method NightClubType setSponsor(Property\SponsorProperty $sponsor)
 * @method NightClubType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method NightClubType setTaxID(Property\TaxIDProperty $taxID)
 * @method NightClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method NightClubType setUrl(Property\UrlProperty $url)
 * @method NightClubType setVatID(Property\VatIDProperty $vatID)
 */
class NightClubType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NightClub';
	}
}