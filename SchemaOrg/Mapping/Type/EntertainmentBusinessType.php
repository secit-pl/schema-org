<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EntertainmentBusinessType.
 * 
 * @method EntertainmentBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EntertainmentBusinessType setAddress(Property\AddressProperty $address)
 * @method EntertainmentBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method EntertainmentBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EntertainmentBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method EntertainmentBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method EntertainmentBusinessType setAward(Property\AwardProperty $award)
 * @method EntertainmentBusinessType setBrand(Property\BrandProperty $brand)
 * @method EntertainmentBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method EntertainmentBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method EntertainmentBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method EntertainmentBusinessType setDescription(Property\DescriptionProperty $description)
 * @method EntertainmentBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EntertainmentBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method EntertainmentBusinessType setDuns(Property\DunsProperty $duns)
 * @method EntertainmentBusinessType setEmail(Property\EmailProperty $email)
 * @method EntertainmentBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method EntertainmentBusinessType setEvent(Property\EventProperty $event)
 * @method EntertainmentBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method EntertainmentBusinessType setFounder(Property\FounderProperty $founder)
 * @method EntertainmentBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method EntertainmentBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method EntertainmentBusinessType setFunder(Property\FunderProperty $funder)
 * @method EntertainmentBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method EntertainmentBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method EntertainmentBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method EntertainmentBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EntertainmentBusinessType setImage(Property\ImageProperty $image)
 * @method EntertainmentBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method EntertainmentBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method EntertainmentBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method EntertainmentBusinessType setLocation(Property\LocationProperty $location)
 * @method EntertainmentBusinessType setLogo(Property\LogoProperty $logo)
 * @method EntertainmentBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EntertainmentBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method EntertainmentBusinessType setMember(Property\MemberProperty $member)
 * @method EntertainmentBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method EntertainmentBusinessType setNaics(Property\NaicsProperty $naics)
 * @method EntertainmentBusinessType setName(Property\NameProperty $name)
 * @method EntertainmentBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method EntertainmentBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method EntertainmentBusinessType setOwns(Property\OwnsProperty $owns)
 * @method EntertainmentBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method EntertainmentBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method EntertainmentBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EntertainmentBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method EntertainmentBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method EntertainmentBusinessType setReview(Property\ReviewProperty $review)
 * @method EntertainmentBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method EntertainmentBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method EntertainmentBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method EntertainmentBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method EntertainmentBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method EntertainmentBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method EntertainmentBusinessType setUrl(Property\UrlProperty $url)
 * @method EntertainmentBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class EntertainmentBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EntertainmentBusiness';
	}
}