<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HealthClubType.
 * 
 * @method HealthClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HealthClubType setAddress(Property\AddressProperty $address)
 * @method HealthClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HealthClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HealthClubType setAlumni(Property\AlumniProperty $alumni)
 * @method HealthClubType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HealthClubType setAward(Property\AwardProperty $award)
 * @method HealthClubType setBrand(Property\BrandProperty $brand)
 * @method HealthClubType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HealthClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HealthClubType setDepartment(Property\DepartmentProperty $department)
 * @method HealthClubType setDescription(Property\DescriptionProperty $description)
 * @method HealthClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HealthClubType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HealthClubType setDuns(Property\DunsProperty $duns)
 * @method HealthClubType setEmail(Property\EmailProperty $email)
 * @method HealthClubType setEmployee(Property\EmployeeProperty $employee)
 * @method HealthClubType setEvent(Property\EventProperty $event)
 * @method HealthClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HealthClubType setFounder(Property\FounderProperty $founder)
 * @method HealthClubType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HealthClubType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HealthClubType setFunder(Property\FunderProperty $funder)
 * @method HealthClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HealthClubType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HealthClubType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HealthClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HealthClubType setImage(Property\ImageProperty $image)
 * @method HealthClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HealthClubType setLegalName(Property\LegalNameProperty $legalName)
 * @method HealthClubType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HealthClubType setLocation(Property\LocationProperty $location)
 * @method HealthClubType setLogo(Property\LogoProperty $logo)
 * @method HealthClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HealthClubType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HealthClubType setMember(Property\MemberProperty $member)
 * @method HealthClubType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HealthClubType setNaics(Property\NaicsProperty $naics)
 * @method HealthClubType setName(Property\NameProperty $name)
 * @method HealthClubType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HealthClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HealthClubType setOwns(Property\OwnsProperty $owns)
 * @method HealthClubType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HealthClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HealthClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HealthClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HealthClubType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HealthClubType setReview(Property\ReviewProperty $review)
 * @method HealthClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method HealthClubType setSeeks(Property\SeeksProperty $seeks)
 * @method HealthClubType setSponsor(Property\SponsorProperty $sponsor)
 * @method HealthClubType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HealthClubType setTaxID(Property\TaxIDProperty $taxID)
 * @method HealthClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method HealthClubType setUrl(Property\UrlProperty $url)
 * @method HealthClubType setVatID(Property\VatIDProperty $vatID)
 */
class HealthClubType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthClub';
	}
}