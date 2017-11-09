<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DryCleaningOrLaundryType.
 * 
 * @method DryCleaningOrLaundryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DryCleaningOrLaundryType setAddress(Property\AddressProperty $address)
 * @method DryCleaningOrLaundryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DryCleaningOrLaundryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DryCleaningOrLaundryType setAlumni(Property\AlumniProperty $alumni)
 * @method DryCleaningOrLaundryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DryCleaningOrLaundryType setAward(Property\AwardProperty $award)
 * @method DryCleaningOrLaundryType setBrand(Property\BrandProperty $brand)
 * @method DryCleaningOrLaundryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method DryCleaningOrLaundryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DryCleaningOrLaundryType setDepartment(Property\DepartmentProperty $department)
 * @method DryCleaningOrLaundryType setDescription(Property\DescriptionProperty $description)
 * @method DryCleaningOrLaundryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DryCleaningOrLaundryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method DryCleaningOrLaundryType setDuns(Property\DunsProperty $duns)
 * @method DryCleaningOrLaundryType setEmail(Property\EmailProperty $email)
 * @method DryCleaningOrLaundryType setEmployee(Property\EmployeeProperty $employee)
 * @method DryCleaningOrLaundryType setEvent(Property\EventProperty $event)
 * @method DryCleaningOrLaundryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DryCleaningOrLaundryType setFounder(Property\FounderProperty $founder)
 * @method DryCleaningOrLaundryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method DryCleaningOrLaundryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method DryCleaningOrLaundryType setFunder(Property\FunderProperty $funder)
 * @method DryCleaningOrLaundryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DryCleaningOrLaundryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DryCleaningOrLaundryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method DryCleaningOrLaundryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DryCleaningOrLaundryType setImage(Property\ImageProperty $image)
 * @method DryCleaningOrLaundryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DryCleaningOrLaundryType setLegalName(Property\LegalNameProperty $legalName)
 * @method DryCleaningOrLaundryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method DryCleaningOrLaundryType setLocation(Property\LocationProperty $location)
 * @method DryCleaningOrLaundryType setLogo(Property\LogoProperty $logo)
 * @method DryCleaningOrLaundryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DryCleaningOrLaundryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method DryCleaningOrLaundryType setMember(Property\MemberProperty $member)
 * @method DryCleaningOrLaundryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method DryCleaningOrLaundryType setNaics(Property\NaicsProperty $naics)
 * @method DryCleaningOrLaundryType setName(Property\NameProperty $name)
 * @method DryCleaningOrLaundryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method DryCleaningOrLaundryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DryCleaningOrLaundryType setOwns(Property\OwnsProperty $owns)
 * @method DryCleaningOrLaundryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method DryCleaningOrLaundryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DryCleaningOrLaundryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DryCleaningOrLaundryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DryCleaningOrLaundryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method DryCleaningOrLaundryType setReview(Property\ReviewProperty $review)
 * @method DryCleaningOrLaundryType setSameAs(Property\SameAsProperty $sameAs)
 * @method DryCleaningOrLaundryType setSeeks(Property\SeeksProperty $seeks)
 * @method DryCleaningOrLaundryType setSponsor(Property\SponsorProperty $sponsor)
 * @method DryCleaningOrLaundryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method DryCleaningOrLaundryType setTaxID(Property\TaxIDProperty $taxID)
 * @method DryCleaningOrLaundryType setTelephone(Property\TelephoneProperty $telephone)
 * @method DryCleaningOrLaundryType setUrl(Property\UrlProperty $url)
 * @method DryCleaningOrLaundryType setVatID(Property\VatIDProperty $vatID)
 */
class DryCleaningOrLaundryType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DryCleaningOrLaundry';
	}
}