<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A vet's office.
 * 
 * @method VeterinaryCareType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VeterinaryCareType setAddress(Property\AddressProperty $address)
 * @method VeterinaryCareType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method VeterinaryCareType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VeterinaryCareType setAlumni(Property\AlumniProperty $alumni)
 * @method VeterinaryCareType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method VeterinaryCareType setAward(Property\AwardProperty $award)
 * @method VeterinaryCareType setBrand(Property\BrandProperty $brand)
 * @method VeterinaryCareType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method VeterinaryCareType setDepartment(Property\DepartmentProperty $department)
 * @method VeterinaryCareType setDescription(Property\DescriptionProperty $description)
 * @method VeterinaryCareType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VeterinaryCareType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method VeterinaryCareType setDuns(Property\DunsProperty $duns)
 * @method VeterinaryCareType setEmail(Property\EmailProperty $email)
 * @method VeterinaryCareType setEmployee(Property\EmployeeProperty $employee)
 * @method VeterinaryCareType setEvent(Property\EventProperty $event)
 * @method VeterinaryCareType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method VeterinaryCareType setFounder(Property\FounderProperty $founder)
 * @method VeterinaryCareType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method VeterinaryCareType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method VeterinaryCareType setFunder(Property\FunderProperty $funder)
 * @method VeterinaryCareType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method VeterinaryCareType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method VeterinaryCareType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method VeterinaryCareType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method VeterinaryCareType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VeterinaryCareType setImage(Property\ImageProperty $image)
 * @method VeterinaryCareType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method VeterinaryCareType setIsicV4(Property\IsicV4Property $isicV4)
 * @method VeterinaryCareType setKeywords(Property\KeywordsProperty $keywords)
 * @method VeterinaryCareType setLegalName(Property\LegalNameProperty $legalName)
 * @method VeterinaryCareType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method VeterinaryCareType setLocation(Property\LocationProperty $location)
 * @method VeterinaryCareType setLogo(Property\LogoProperty $logo)
 * @method VeterinaryCareType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VeterinaryCareType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method VeterinaryCareType setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty)
 * @method VeterinaryCareType setMember(Property\MemberProperty $member)
 * @method VeterinaryCareType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method VeterinaryCareType setNaics(Property\NaicsProperty $naics)
 * @method VeterinaryCareType setName(Property\NameProperty $name)
 * @method VeterinaryCareType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method VeterinaryCareType setOwns(Property\OwnsProperty $owns)
 * @method VeterinaryCareType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method VeterinaryCareType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VeterinaryCareType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method VeterinaryCareType setReview(Property\ReviewProperty $review)
 * @method VeterinaryCareType setSameAs(Property\SameAsProperty $sameAs)
 * @method VeterinaryCareType setSeeks(Property\SeeksProperty $seeks)
 * @method VeterinaryCareType setSlogan(Property\SloganProperty $slogan)
 * @method VeterinaryCareType setSponsor(Property\SponsorProperty $sponsor)
 * @method VeterinaryCareType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method VeterinaryCareType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VeterinaryCareType setTaxID(Property\TaxIDProperty $taxID)
 * @method VeterinaryCareType setTelephone(Property\TelephoneProperty $telephone)
 * @method VeterinaryCareType setUrl(Property\UrlProperty $url)
 * @method VeterinaryCareType setVatID(Property\VatIDProperty $vatID)
 */
class VeterinaryCareType extends MedicalOrganizationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VeterinaryCare';
	}
}