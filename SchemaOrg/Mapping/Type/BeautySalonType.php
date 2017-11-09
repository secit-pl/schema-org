<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BeautySalonType.
 * 
 * @method BeautySalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BeautySalonType setAddress(Property\AddressProperty $address)
 * @method BeautySalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BeautySalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BeautySalonType setAlumni(Property\AlumniProperty $alumni)
 * @method BeautySalonType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BeautySalonType setAward(Property\AwardProperty $award)
 * @method BeautySalonType setBrand(Property\BrandProperty $brand)
 * @method BeautySalonType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BeautySalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BeautySalonType setDepartment(Property\DepartmentProperty $department)
 * @method BeautySalonType setDescription(Property\DescriptionProperty $description)
 * @method BeautySalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BeautySalonType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BeautySalonType setDuns(Property\DunsProperty $duns)
 * @method BeautySalonType setEmail(Property\EmailProperty $email)
 * @method BeautySalonType setEmployee(Property\EmployeeProperty $employee)
 * @method BeautySalonType setEvent(Property\EventProperty $event)
 * @method BeautySalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BeautySalonType setFounder(Property\FounderProperty $founder)
 * @method BeautySalonType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BeautySalonType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BeautySalonType setFunder(Property\FunderProperty $funder)
 * @method BeautySalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BeautySalonType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BeautySalonType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BeautySalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BeautySalonType setImage(Property\ImageProperty $image)
 * @method BeautySalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BeautySalonType setLegalName(Property\LegalNameProperty $legalName)
 * @method BeautySalonType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BeautySalonType setLocation(Property\LocationProperty $location)
 * @method BeautySalonType setLogo(Property\LogoProperty $logo)
 * @method BeautySalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BeautySalonType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BeautySalonType setMember(Property\MemberProperty $member)
 * @method BeautySalonType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BeautySalonType setNaics(Property\NaicsProperty $naics)
 * @method BeautySalonType setName(Property\NameProperty $name)
 * @method BeautySalonType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BeautySalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BeautySalonType setOwns(Property\OwnsProperty $owns)
 * @method BeautySalonType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BeautySalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BeautySalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BeautySalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BeautySalonType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BeautySalonType setReview(Property\ReviewProperty $review)
 * @method BeautySalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method BeautySalonType setSeeks(Property\SeeksProperty $seeks)
 * @method BeautySalonType setSponsor(Property\SponsorProperty $sponsor)
 * @method BeautySalonType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BeautySalonType setTaxID(Property\TaxIDProperty $taxID)
 * @method BeautySalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method BeautySalonType setUrl(Property\UrlProperty $url)
 * @method BeautySalonType setVatID(Property\VatIDProperty $vatID)
 */
class BeautySalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BeautySalon';
	}
}