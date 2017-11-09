<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SkiResortType.
 * 
 * @method SkiResortType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SkiResortType setAddress(Property\AddressProperty $address)
 * @method SkiResortType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SkiResortType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SkiResortType setAlumni(Property\AlumniProperty $alumni)
 * @method SkiResortType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SkiResortType setAward(Property\AwardProperty $award)
 * @method SkiResortType setBrand(Property\BrandProperty $brand)
 * @method SkiResortType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SkiResortType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SkiResortType setDepartment(Property\DepartmentProperty $department)
 * @method SkiResortType setDescription(Property\DescriptionProperty $description)
 * @method SkiResortType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SkiResortType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SkiResortType setDuns(Property\DunsProperty $duns)
 * @method SkiResortType setEmail(Property\EmailProperty $email)
 * @method SkiResortType setEmployee(Property\EmployeeProperty $employee)
 * @method SkiResortType setEvent(Property\EventProperty $event)
 * @method SkiResortType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SkiResortType setFounder(Property\FounderProperty $founder)
 * @method SkiResortType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SkiResortType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SkiResortType setFunder(Property\FunderProperty $funder)
 * @method SkiResortType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SkiResortType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SkiResortType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SkiResortType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SkiResortType setImage(Property\ImageProperty $image)
 * @method SkiResortType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SkiResortType setLegalName(Property\LegalNameProperty $legalName)
 * @method SkiResortType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SkiResortType setLocation(Property\LocationProperty $location)
 * @method SkiResortType setLogo(Property\LogoProperty $logo)
 * @method SkiResortType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SkiResortType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SkiResortType setMember(Property\MemberProperty $member)
 * @method SkiResortType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SkiResortType setNaics(Property\NaicsProperty $naics)
 * @method SkiResortType setName(Property\NameProperty $name)
 * @method SkiResortType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SkiResortType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SkiResortType setOwns(Property\OwnsProperty $owns)
 * @method SkiResortType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SkiResortType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SkiResortType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SkiResortType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SkiResortType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SkiResortType setReview(Property\ReviewProperty $review)
 * @method SkiResortType setSameAs(Property\SameAsProperty $sameAs)
 * @method SkiResortType setSeeks(Property\SeeksProperty $seeks)
 * @method SkiResortType setSponsor(Property\SponsorProperty $sponsor)
 * @method SkiResortType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SkiResortType setTaxID(Property\TaxIDProperty $taxID)
 * @method SkiResortType setTelephone(Property\TelephoneProperty $telephone)
 * @method SkiResortType setUrl(Property\UrlProperty $url)
 * @method SkiResortType setVatID(Property\VatIDProperty $vatID)
 */
class SkiResortType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SkiResort';
	}
}