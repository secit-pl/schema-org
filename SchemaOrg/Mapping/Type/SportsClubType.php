<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsClubType.
 * 
 * @method SportsClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsClubType setAddress(Property\AddressProperty $address)
 * @method SportsClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsClubType setAlumni(Property\AlumniProperty $alumni)
 * @method SportsClubType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SportsClubType setAward(Property\AwardProperty $award)
 * @method SportsClubType setBrand(Property\BrandProperty $brand)
 * @method SportsClubType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SportsClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportsClubType setDepartment(Property\DepartmentProperty $department)
 * @method SportsClubType setDescription(Property\DescriptionProperty $description)
 * @method SportsClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsClubType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SportsClubType setDuns(Property\DunsProperty $duns)
 * @method SportsClubType setEmail(Property\EmailProperty $email)
 * @method SportsClubType setEmployee(Property\EmployeeProperty $employee)
 * @method SportsClubType setEvent(Property\EventProperty $event)
 * @method SportsClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsClubType setFounder(Property\FounderProperty $founder)
 * @method SportsClubType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SportsClubType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SportsClubType setFunder(Property\FunderProperty $funder)
 * @method SportsClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsClubType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SportsClubType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SportsClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsClubType setImage(Property\ImageProperty $image)
 * @method SportsClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsClubType setLegalName(Property\LegalNameProperty $legalName)
 * @method SportsClubType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SportsClubType setLocation(Property\LocationProperty $location)
 * @method SportsClubType setLogo(Property\LogoProperty $logo)
 * @method SportsClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsClubType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SportsClubType setMember(Property\MemberProperty $member)
 * @method SportsClubType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SportsClubType setNaics(Property\NaicsProperty $naics)
 * @method SportsClubType setName(Property\NameProperty $name)
 * @method SportsClubType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SportsClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportsClubType setOwns(Property\OwnsProperty $owns)
 * @method SportsClubType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SportsClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportsClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportsClubType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SportsClubType setReview(Property\ReviewProperty $review)
 * @method SportsClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsClubType setSeeks(Property\SeeksProperty $seeks)
 * @method SportsClubType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportsClubType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SportsClubType setTaxID(Property\TaxIDProperty $taxID)
 * @method SportsClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsClubType setUrl(Property\UrlProperty $url)
 * @method SportsClubType setVatID(Property\VatIDProperty $vatID)
 */
class SportsClubType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsClub';
	}
}