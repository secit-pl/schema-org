<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AdultEntertainmentType.
 * 
 * @method AdultEntertainmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AdultEntertainmentType setAddress(Property\AddressProperty $address)
 * @method AdultEntertainmentType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AdultEntertainmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AdultEntertainmentType setAlumni(Property\AlumniProperty $alumni)
 * @method AdultEntertainmentType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AdultEntertainmentType setAward(Property\AwardProperty $award)
 * @method AdultEntertainmentType setBrand(Property\BrandProperty $brand)
 * @method AdultEntertainmentType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AdultEntertainmentType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AdultEntertainmentType setDepartment(Property\DepartmentProperty $department)
 * @method AdultEntertainmentType setDescription(Property\DescriptionProperty $description)
 * @method AdultEntertainmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AdultEntertainmentType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AdultEntertainmentType setDuns(Property\DunsProperty $duns)
 * @method AdultEntertainmentType setEmail(Property\EmailProperty $email)
 * @method AdultEntertainmentType setEmployee(Property\EmployeeProperty $employee)
 * @method AdultEntertainmentType setEvent(Property\EventProperty $event)
 * @method AdultEntertainmentType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AdultEntertainmentType setFounder(Property\FounderProperty $founder)
 * @method AdultEntertainmentType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AdultEntertainmentType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AdultEntertainmentType setFunder(Property\FunderProperty $funder)
 * @method AdultEntertainmentType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AdultEntertainmentType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AdultEntertainmentType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AdultEntertainmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AdultEntertainmentType setImage(Property\ImageProperty $image)
 * @method AdultEntertainmentType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AdultEntertainmentType setLegalName(Property\LegalNameProperty $legalName)
 * @method AdultEntertainmentType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AdultEntertainmentType setLocation(Property\LocationProperty $location)
 * @method AdultEntertainmentType setLogo(Property\LogoProperty $logo)
 * @method AdultEntertainmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AdultEntertainmentType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AdultEntertainmentType setMember(Property\MemberProperty $member)
 * @method AdultEntertainmentType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AdultEntertainmentType setNaics(Property\NaicsProperty $naics)
 * @method AdultEntertainmentType setName(Property\NameProperty $name)
 * @method AdultEntertainmentType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AdultEntertainmentType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AdultEntertainmentType setOwns(Property\OwnsProperty $owns)
 * @method AdultEntertainmentType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AdultEntertainmentType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AdultEntertainmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AdultEntertainmentType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AdultEntertainmentType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AdultEntertainmentType setReview(Property\ReviewProperty $review)
 * @method AdultEntertainmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method AdultEntertainmentType setSeeks(Property\SeeksProperty $seeks)
 * @method AdultEntertainmentType setSponsor(Property\SponsorProperty $sponsor)
 * @method AdultEntertainmentType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AdultEntertainmentType setTaxID(Property\TaxIDProperty $taxID)
 * @method AdultEntertainmentType setTelephone(Property\TelephoneProperty $telephone)
 * @method AdultEntertainmentType setUrl(Property\UrlProperty $url)
 * @method AdultEntertainmentType setVatID(Property\VatIDProperty $vatID)
 */
class AdultEntertainmentType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdultEntertainment';
	}
}