<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GolfCourseType.
 * 
 * @method GolfCourseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GolfCourseType setAddress(Property\AddressProperty $address)
 * @method GolfCourseType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GolfCourseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GolfCourseType setAlumni(Property\AlumniProperty $alumni)
 * @method GolfCourseType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GolfCourseType setAward(Property\AwardProperty $award)
 * @method GolfCourseType setBrand(Property\BrandProperty $brand)
 * @method GolfCourseType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GolfCourseType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GolfCourseType setDepartment(Property\DepartmentProperty $department)
 * @method GolfCourseType setDescription(Property\DescriptionProperty $description)
 * @method GolfCourseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GolfCourseType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GolfCourseType setDuns(Property\DunsProperty $duns)
 * @method GolfCourseType setEmail(Property\EmailProperty $email)
 * @method GolfCourseType setEmployee(Property\EmployeeProperty $employee)
 * @method GolfCourseType setEvent(Property\EventProperty $event)
 * @method GolfCourseType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GolfCourseType setFounder(Property\FounderProperty $founder)
 * @method GolfCourseType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GolfCourseType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GolfCourseType setFunder(Property\FunderProperty $funder)
 * @method GolfCourseType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GolfCourseType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GolfCourseType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GolfCourseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GolfCourseType setImage(Property\ImageProperty $image)
 * @method GolfCourseType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GolfCourseType setLegalName(Property\LegalNameProperty $legalName)
 * @method GolfCourseType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GolfCourseType setLocation(Property\LocationProperty $location)
 * @method GolfCourseType setLogo(Property\LogoProperty $logo)
 * @method GolfCourseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GolfCourseType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GolfCourseType setMember(Property\MemberProperty $member)
 * @method GolfCourseType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GolfCourseType setNaics(Property\NaicsProperty $naics)
 * @method GolfCourseType setName(Property\NameProperty $name)
 * @method GolfCourseType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GolfCourseType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GolfCourseType setOwns(Property\OwnsProperty $owns)
 * @method GolfCourseType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GolfCourseType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GolfCourseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GolfCourseType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GolfCourseType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GolfCourseType setReview(Property\ReviewProperty $review)
 * @method GolfCourseType setSameAs(Property\SameAsProperty $sameAs)
 * @method GolfCourseType setSeeks(Property\SeeksProperty $seeks)
 * @method GolfCourseType setSponsor(Property\SponsorProperty $sponsor)
 * @method GolfCourseType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GolfCourseType setTaxID(Property\TaxIDProperty $taxID)
 * @method GolfCourseType setTelephone(Property\TelephoneProperty $telephone)
 * @method GolfCourseType setUrl(Property\UrlProperty $url)
 * @method GolfCourseType setVatID(Property\VatIDProperty $vatID)
 */
class GolfCourseType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GolfCourse';
	}
}