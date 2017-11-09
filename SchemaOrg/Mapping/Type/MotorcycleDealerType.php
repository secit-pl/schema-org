<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MotorcycleDealerType.
 * 
 * @method MotorcycleDealerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MotorcycleDealerType setAddress(Property\AddressProperty $address)
 * @method MotorcycleDealerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MotorcycleDealerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MotorcycleDealerType setAlumni(Property\AlumniProperty $alumni)
 * @method MotorcycleDealerType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MotorcycleDealerType setAward(Property\AwardProperty $award)
 * @method MotorcycleDealerType setBrand(Property\BrandProperty $brand)
 * @method MotorcycleDealerType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MotorcycleDealerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MotorcycleDealerType setDepartment(Property\DepartmentProperty $department)
 * @method MotorcycleDealerType setDescription(Property\DescriptionProperty $description)
 * @method MotorcycleDealerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MotorcycleDealerType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MotorcycleDealerType setDuns(Property\DunsProperty $duns)
 * @method MotorcycleDealerType setEmail(Property\EmailProperty $email)
 * @method MotorcycleDealerType setEmployee(Property\EmployeeProperty $employee)
 * @method MotorcycleDealerType setEvent(Property\EventProperty $event)
 * @method MotorcycleDealerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MotorcycleDealerType setFounder(Property\FounderProperty $founder)
 * @method MotorcycleDealerType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MotorcycleDealerType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MotorcycleDealerType setFunder(Property\FunderProperty $funder)
 * @method MotorcycleDealerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MotorcycleDealerType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MotorcycleDealerType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MotorcycleDealerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MotorcycleDealerType setImage(Property\ImageProperty $image)
 * @method MotorcycleDealerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MotorcycleDealerType setLegalName(Property\LegalNameProperty $legalName)
 * @method MotorcycleDealerType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MotorcycleDealerType setLocation(Property\LocationProperty $location)
 * @method MotorcycleDealerType setLogo(Property\LogoProperty $logo)
 * @method MotorcycleDealerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MotorcycleDealerType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MotorcycleDealerType setMember(Property\MemberProperty $member)
 * @method MotorcycleDealerType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MotorcycleDealerType setNaics(Property\NaicsProperty $naics)
 * @method MotorcycleDealerType setName(Property\NameProperty $name)
 * @method MotorcycleDealerType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MotorcycleDealerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MotorcycleDealerType setOwns(Property\OwnsProperty $owns)
 * @method MotorcycleDealerType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MotorcycleDealerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MotorcycleDealerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MotorcycleDealerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MotorcycleDealerType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MotorcycleDealerType setReview(Property\ReviewProperty $review)
 * @method MotorcycleDealerType setSameAs(Property\SameAsProperty $sameAs)
 * @method MotorcycleDealerType setSeeks(Property\SeeksProperty $seeks)
 * @method MotorcycleDealerType setSponsor(Property\SponsorProperty $sponsor)
 * @method MotorcycleDealerType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MotorcycleDealerType setTaxID(Property\TaxIDProperty $taxID)
 * @method MotorcycleDealerType setTelephone(Property\TelephoneProperty $telephone)
 * @method MotorcycleDealerType setUrl(Property\UrlProperty $url)
 * @method MotorcycleDealerType setVatID(Property\VatIDProperty $vatID)
 */
class MotorcycleDealerType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MotorcycleDealer';
	}
}