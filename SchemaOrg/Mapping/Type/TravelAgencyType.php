<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TravelAgencyType.
 * 
 * @method TravelAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TravelAgencyType setAddress(Property\AddressProperty $address)
 * @method TravelAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TravelAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TravelAgencyType setAlumni(Property\AlumniProperty $alumni)
 * @method TravelAgencyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TravelAgencyType setAward(Property\AwardProperty $award)
 * @method TravelAgencyType setBrand(Property\BrandProperty $brand)
 * @method TravelAgencyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TravelAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TravelAgencyType setDepartment(Property\DepartmentProperty $department)
 * @method TravelAgencyType setDescription(Property\DescriptionProperty $description)
 * @method TravelAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TravelAgencyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TravelAgencyType setDuns(Property\DunsProperty $duns)
 * @method TravelAgencyType setEmail(Property\EmailProperty $email)
 * @method TravelAgencyType setEmployee(Property\EmployeeProperty $employee)
 * @method TravelAgencyType setEvent(Property\EventProperty $event)
 * @method TravelAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TravelAgencyType setFounder(Property\FounderProperty $founder)
 * @method TravelAgencyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TravelAgencyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TravelAgencyType setFunder(Property\FunderProperty $funder)
 * @method TravelAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TravelAgencyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TravelAgencyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TravelAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TravelAgencyType setImage(Property\ImageProperty $image)
 * @method TravelAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TravelAgencyType setLegalName(Property\LegalNameProperty $legalName)
 * @method TravelAgencyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TravelAgencyType setLocation(Property\LocationProperty $location)
 * @method TravelAgencyType setLogo(Property\LogoProperty $logo)
 * @method TravelAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TravelAgencyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TravelAgencyType setMember(Property\MemberProperty $member)
 * @method TravelAgencyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TravelAgencyType setNaics(Property\NaicsProperty $naics)
 * @method TravelAgencyType setName(Property\NameProperty $name)
 * @method TravelAgencyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TravelAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TravelAgencyType setOwns(Property\OwnsProperty $owns)
 * @method TravelAgencyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TravelAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TravelAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TravelAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TravelAgencyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TravelAgencyType setReview(Property\ReviewProperty $review)
 * @method TravelAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method TravelAgencyType setSeeks(Property\SeeksProperty $seeks)
 * @method TravelAgencyType setSponsor(Property\SponsorProperty $sponsor)
 * @method TravelAgencyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TravelAgencyType setTaxID(Property\TaxIDProperty $taxID)
 * @method TravelAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method TravelAgencyType setUrl(Property\UrlProperty $url)
 * @method TravelAgencyType setVatID(Property\VatIDProperty $vatID)
 */
class TravelAgencyType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TravelAgency';
	}
}