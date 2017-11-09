<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CasinoType.
 * 
 * @method CasinoType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CasinoType setAddress(Property\AddressProperty $address)
 * @method CasinoType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CasinoType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CasinoType setAlumni(Property\AlumniProperty $alumni)
 * @method CasinoType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CasinoType setAward(Property\AwardProperty $award)
 * @method CasinoType setBrand(Property\BrandProperty $brand)
 * @method CasinoType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method CasinoType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CasinoType setDepartment(Property\DepartmentProperty $department)
 * @method CasinoType setDescription(Property\DescriptionProperty $description)
 * @method CasinoType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CasinoType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method CasinoType setDuns(Property\DunsProperty $duns)
 * @method CasinoType setEmail(Property\EmailProperty $email)
 * @method CasinoType setEmployee(Property\EmployeeProperty $employee)
 * @method CasinoType setEvent(Property\EventProperty $event)
 * @method CasinoType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CasinoType setFounder(Property\FounderProperty $founder)
 * @method CasinoType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method CasinoType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method CasinoType setFunder(Property\FunderProperty $funder)
 * @method CasinoType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CasinoType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CasinoType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method CasinoType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CasinoType setImage(Property\ImageProperty $image)
 * @method CasinoType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CasinoType setLegalName(Property\LegalNameProperty $legalName)
 * @method CasinoType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method CasinoType setLocation(Property\LocationProperty $location)
 * @method CasinoType setLogo(Property\LogoProperty $logo)
 * @method CasinoType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CasinoType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method CasinoType setMember(Property\MemberProperty $member)
 * @method CasinoType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method CasinoType setNaics(Property\NaicsProperty $naics)
 * @method CasinoType setName(Property\NameProperty $name)
 * @method CasinoType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method CasinoType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CasinoType setOwns(Property\OwnsProperty $owns)
 * @method CasinoType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method CasinoType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CasinoType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CasinoType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CasinoType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CasinoType setReview(Property\ReviewProperty $review)
 * @method CasinoType setSameAs(Property\SameAsProperty $sameAs)
 * @method CasinoType setSeeks(Property\SeeksProperty $seeks)
 * @method CasinoType setSponsor(Property\SponsorProperty $sponsor)
 * @method CasinoType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method CasinoType setTaxID(Property\TaxIDProperty $taxID)
 * @method CasinoType setTelephone(Property\TelephoneProperty $telephone)
 * @method CasinoType setUrl(Property\UrlProperty $url)
 * @method CasinoType setVatID(Property\VatIDProperty $vatID)
 */
class CasinoType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Casino';
	}
}