<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoRentalType.
 * 
 * @method AutoRentalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoRentalType setAddress(Property\AddressProperty $address)
 * @method AutoRentalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoRentalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoRentalType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoRentalType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoRentalType setAward(Property\AwardProperty $award)
 * @method AutoRentalType setBrand(Property\BrandProperty $brand)
 * @method AutoRentalType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoRentalType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoRentalType setDepartment(Property\DepartmentProperty $department)
 * @method AutoRentalType setDescription(Property\DescriptionProperty $description)
 * @method AutoRentalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoRentalType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoRentalType setDuns(Property\DunsProperty $duns)
 * @method AutoRentalType setEmail(Property\EmailProperty $email)
 * @method AutoRentalType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoRentalType setEvent(Property\EventProperty $event)
 * @method AutoRentalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoRentalType setFounder(Property\FounderProperty $founder)
 * @method AutoRentalType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoRentalType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoRentalType setFunder(Property\FunderProperty $funder)
 * @method AutoRentalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoRentalType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoRentalType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoRentalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoRentalType setImage(Property\ImageProperty $image)
 * @method AutoRentalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoRentalType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoRentalType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoRentalType setLocation(Property\LocationProperty $location)
 * @method AutoRentalType setLogo(Property\LogoProperty $logo)
 * @method AutoRentalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoRentalType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoRentalType setMember(Property\MemberProperty $member)
 * @method AutoRentalType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoRentalType setNaics(Property\NaicsProperty $naics)
 * @method AutoRentalType setName(Property\NameProperty $name)
 * @method AutoRentalType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoRentalType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoRentalType setOwns(Property\OwnsProperty $owns)
 * @method AutoRentalType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoRentalType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoRentalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoRentalType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoRentalType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoRentalType setReview(Property\ReviewProperty $review)
 * @method AutoRentalType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoRentalType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoRentalType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoRentalType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoRentalType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoRentalType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoRentalType setUrl(Property\UrlProperty $url)
 * @method AutoRentalType setVatID(Property\VatIDProperty $vatID)
 */
class AutoRentalType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRental';
	}
}