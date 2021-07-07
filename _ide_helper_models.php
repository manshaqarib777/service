<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Address
 *
 * @package App\Models
 * @version January 13, 2021, 8:02 pm UTC
 * @property User user
 * @property integer id
 * @property string description
 * @property string address
 * @property double latitude
 * @property double longitude
 * @property boolean default
 * @property integer user_id
 * @property int $id
 * @property string|null $description
 * @property string $address
 * @property float $latitude
 * @property float $longitude
 * @property bool|null $default
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property int|null $state_id
 * @property int|null $area_id
 * @property-read \App\Models\Area|null $area
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read \App\Models\State|null $state
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent implements \Illuminate\Contracts\Database\Eloquent\Castable {}
}

namespace App\Models{
/**
 * Class Country
 *
 * @package App\Models
 * @version October 22, 2019, 2:46 pm UTC
 * @property string name
 * @property string symbol
 * @property string code
 * @property unsignedTinyInteger decimal_digits
 * @property unsignedTinyInteger rounding
 * @property int $id
 * @property int $state_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $code
 * @property int $country_id
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|Area newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area query()
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereUpdatedAt($value)
 */
	class Area extends \Eloquent {}
}

namespace App\Models{
/**
 * Class AvailabilityHour
 *
 * @package App\Models
 * @version January 16, 2021, 4:08 pm UTC
 * @property EProvider eProvider
 * @property string id
 * @property string day
 * @property string start_at
 * @property string end_at
 * @property string data
 * @property integer e_provider_id
 * @property int $id
 * @property string $day
 * @property string|null $start_at
 * @property string|null $end_at
 * @property string|null $data
 * @property int $e_provider_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read array $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour query()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailabilityHour whereStartAt($value)
 */
	class AvailabilityHour extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Award
 *
 * @package App\Models
 * @version January 12, 2021, 10:59 am UTC
 * @property EProvider eProvider
 * @property string id
 * @property string title
 * @property string description
 * @property integer e_provider_id
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int $e_provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Award newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Award newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Award query()
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Award whereUpdatedAt($value)
 */
	class Award extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Booking
 *
 * @package App\Models
 * @version January 25, 2021, 9:22 pm UTC
 * @property int id
 * @property User user
 * @property BookingStatus bookingStatus
 * @property Payment payment
 * @property EProvider e_provider
 * @property EService e_service
 * @property Option[] options
 * @property integer quantity
 * @property integer user_id
 * @property integer address_id
 * @property integer booking_status_id
 * @property integer payment_status_id
 * @property Address address
 * @property integer payment_id
 * @property double duration
 * @property Coupon coupon
 * @property Tax[] taxes
 * @property Date booking_at
 * @property Date start_at
 * @property Date ends_at
 * @property string hint
 * @property boolean cancel
 * @property int $id
 * @property \App\Models\EProvider $e_provider
 * @property \App\Models\EService $e_service
 * @property array|null $options
 * @property int|null $quantity
 * @property int|null $user_id
 * @property int|null $booking_status_id
 * @property \App\Models\Address $address
 * @property int|null $payment_id
 * @property \App\Models\Coupon|null $coupon
 * @property array|null $taxes
 * @property \datetime|null $booking_at
 * @property \datetime|null $start_at
 * @property \datetime|null $ends_at
 * @property string|null $hint
 * @property bool|null $cancel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BookingStatus|null $bookingStatus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read float $duration
 * @property-read \App\Models\Payment|null $payment
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereBookingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereBookingStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCancel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereEProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereEService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereHint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereTaxes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUserId($value)
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
/**
 * Class BookingStatus
 *
 * @package App\Models
 * @version January 25, 2021, 7:18 pm UTC
 * @property string status
 * @property int order
 * @property int $id
 * @property string|null $status
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingStatus whereUpdatedAt($value)
 */
	class BookingStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Category
 *
 * @package App\Models
 * @version January 19, 2021, 2:04 pm UTC
 * @property Category parentCategory
 * @property Category[] subCategories
 * @property EService[] featuredEServices
 * @property EService[] eServices
 * @property string name
 * @property string color
 * @property string description
 * @property integer order
 * @property boolean featured
 * @property boolean is_parent
 * @property integer parent_id
 * @property int $id
 * @property string|null $name
 * @property string $color
 * @property string|null $description
 * @property int|null $order
 * @property bool|null $featured
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Discountable[] $discountables
 * @property-read int|null $discountables_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EService[] $eServices
 * @property-read int|null $e_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EService[] $featuredEServices
 * @property-read int|null $featured_e_services_count
 * @property-read mixed $custom_fields
 * @property-read bool $has_media
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read Category|null $parentCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $subCategories
 * @property-read int|null $sub_categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class Country
 *
 * @package App\Models
 * @version October 22, 2019, 2:46 pm UTC
 * @property string name
 * @property string symbol
 * @property string code
 * @property unsignedTinyInteger decimal_digits
 * @property unsignedTinyInteger rounding
 * @property int $id
 * @property string $name
 * @property string|null $iso3
 * @property string|null $code
 * @property string|null $phonecode
 * @property string|null $capital
 * @property string|null $currency_symbol
 * @property string|null $tld
 * @property string|null $native
 * @property string|null $region
 * @property string|null $subregion
 * @property string|null $timezones
 * @property string|null $translations
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $emoji
 * @property string|null $emojiU
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $flag
 * @property string|null $wikiDataId Rapid API GeoDB Cities
 * @property bool $active
 * @property string|null $deleted_at
 * @property string|null $cell_phone
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $email
 * @property int $currency_id
 * @property int|null $default_tax
 * @property string|null $distance_unit
 * @property-read \App\Models\Currency $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read mixed $name_symbol
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCapital($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCellPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDefaultTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDistanceUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereEmoji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereEmojiU($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIso3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSubregion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTimezones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTranslations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereWikiDataId($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Coupon
 *
 * @package App\Models
 * @property integer id
 * @property string code
 * @property double discount
 * @property string discount_type
 * @property string description
 * @property DateTime expires_at
 * @property boolean enabled
 * @property int $id
 * @property string $code
 * @property float $discount
 * @property string $discount_type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $expires_at
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Discountable[] $discountables
 * @property-read int|null $discountables_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class Coupon extends \Eloquent implements \Illuminate\Contracts\Database\Eloquent\Castable {}
}

namespace App\Models{
/**
 * Class Currency
 *
 * @package App\Models
 * @version October 22, 2019, 2:46 pm UTC
 * @property string name
 * @property string symbol
 * @property string code
 * @property unsignedTinyInteger decimal_digits
 * @property unsignedTinyInteger rounding
 * @property int $id
 * @property string|null $name
 * @property string|null $symbol
 * @property string|null $code
 * @property int|null $decimal_digits
 * @property int|null $rounding
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read mixed $name_symbol
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereDecimalDigits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereRounding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CustomField
 *
 * @package App\Models
 * @version July 24, 2018, 9:13 pm UTC
 * @property string name
 * @property string type
 * @property boolean disabled
 * @property boolean required
 * @property boolean in_table
 * @property tinyInteger bootstrap_column
 * @property tinyInteger order
 * @property string custom_field_model
 * @property int $id
 * @property string $name
 * @property string $type
 * @property array|null $values
 * @property bool|null $disabled
 * @property bool|null $required
 * @property bool|null $in_table
 * @property int|null $bootstrap_column
 * @property int|null $order
 * @property string $custom_field_model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereBootstrapColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereCustomFieldModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereInTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomField whereValues($value)
 */
	class CustomField extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CustomFieldValue
 *
 * @package App\Models
 * @version July 24, 2018, 9:13 pm UTC
 * @property CustomField customField
 * @property string value
 * @property integer custom_field_id
 * @property string customizable_type
 * @property integer customizable_id
 * @property int $id
 * @property string|null $value
 * @property string|null $view
 * @property int $custom_field_id
 * @property string $customizable_type
 * @property int $customizable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CustomField $customField
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $customizable
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomFieldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomizableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereCustomizableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomFieldValue whereView($value)
 */
	class CustomFieldValue extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CustomPage
 *
 * @package App\Models
 * @version February 24, 2021, 10:28 am CET
 * @property string title
 * @property string content
 * @property boolean published
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property int|null $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereUpdatedAt($value)
 */
	class CustomPage extends \Eloquent {}
}

namespace App\Models{
/**
 * Class CustomFieldValue
 *
 * @package App\Models
 * @version July 24, 2018, 9:13 pm UTC
 * @property CustomField customField
 * @property string value
 * @property integer coupon_id
 * @property string discountable_type
 * @property integer discountable_id
 * @property int $id
 * @property int $coupon_id
 * @property string $discountable_type
 * @property int $discountable_id
 * @property-read \App\Models\Coupon $coupon
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $discountable
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable whereDiscountableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable whereDiscountableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Discountable whereId($value)
 */
	class Discountable extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EProvider
 *
 * @package App\Models
 * @version January 13, 2021, 11:11 am UTC
 * @property EProviderType eProviderType
 * @property Collection[] users
 * @property Collection[] taxes
 * @property Collection[] addresses
 * @property Collection[] awards
 * @property Collection[] experiences
 * @property Collection[] availabilityHours
 * @property Collection[] eServices
 * @property Collection[] galleries
 * @property integer id
 * @property string name
 * @property integer e_provider_type_id
 * @property string description
 * @property string phone_number
 * @property string mobile_number
 * @property double availability_range
 * @property boolean available
 * @property boolean featured
 * @property boolean accepted
 * @property int $id
 * @property string|null $name
 * @property int $e_provider_type_id
 * @property string|null $description
 * @property string|null $phone_number
 * @property string|null $mobile_number
 * @property float|null $availability_range
 * @property bool $available
 * @property bool|null $featured
 * @property bool|null $accepted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AvailabilityHour[] $availabilityHours
 * @property-read int|null $availability_hours_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Award[] $awards
 * @property-read int|null $awards_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Discountable[] $discountables
 * @property-read int|null $discountables_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EServiceReview[] $eProviderReviews
 * @property-read int|null $e_provider_reviews_count
 * @property-read \App\Models\EProviderType $eProviderType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EService[] $eServices
 * @property-read int|null $e_services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Experience[] $experiences
 * @property-read int|null $experiences_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gallery[] $galleries
 * @property-read int|null $galleries_count
 * @property-read mixed $custom_fields
 * @property-read bool $has_media
 * @property-read float $rate
 * @property-read float $total_reviews
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tax[] $taxes
 * @property-read int|null $taxes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereAccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereAvailabilityRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereEProviderTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProvider whereUpdatedAt($value)
 */
	class EProvider extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia, \Illuminate\Contracts\Database\Eloquent\Castable {}
}

namespace App\Models{
/**
 * App\Models\EProviderAddress
 *
 * @property int $e_provider_id
 * @property int $address_id
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderAddress whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderAddress whereEProviderId($value)
 */
	class EProviderAddress extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EProviderPayout
 *
 * @package App\Models
 * @version January 30, 2021, 11:17 am UTC
 * @property EProvider eProvider
 * @property integer e_provider_id
 * @property string method
 * @property double amount
 * @property Date paid_date
 * @property string note
 * @property int $id
 * @property int $e_provider_id
 * @property string $method
 * @property float $amount
 * @property \Illuminate\Support\Carbon $paid_date
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read mixed $custom_fields
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout query()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderPayout whereUpdatedAt($value)
 */
	class EProviderPayout extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EProviderType
 *
 * @package App\Models
 * @version January 13, 2021, 10:56 am UTC
 * @property string name
 * @property double commission
 * @property boolean disabled
 * @property int $id
 * @property string|null $name
 * @property float $commission
 * @property bool $disabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderType whereUpdatedAt($value)
 */
	class EProviderType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EProviderUser
 *
 * @property int $user_id
 * @property int $e_provider_id
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderUser whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EProviderUser whereUserId($value)
 */
	class EProviderUser extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EService
 *
 * @package App\Models
 * @version January 19, 2021, 1:59 pm UTC
 * @property Collection category
 * @property EProvider eProvider
 * @property Collection Option
 * @property Collection EServicesReview
 * @property string name
 * @property integer id
 * @property double price
 * @property double discount_price
 * @property string price_unit
 * @property string quantity_unit
 * @property string duration
 * @property string description
 * @property boolean featured
 * @property boolean available
 * @property integer e_provider_id
 * @property int $id
 * @property string|null $name
 * @property float $price
 * @property float|null $discount_price
 * @property string $price_unit
 * @property string|null $quantity_unit
 * @property string|null $duration
 * @property string|null $description
 * @property bool|null $featured
 * @property bool $available
 * @property int $e_provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Discountable[] $discountables
 * @property-read int|null $discountables_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EServiceReview[] $eServiceReviews
 * @property-read int|null $e_service_reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property-read mixed $custom_fields
 * @property-read bool $has_media
 * @property-read bool $is_favorite
 * @property-read float $rate
 * @property-read int $total_reviews
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @property-read int|null $options_count
 * @method static \Illuminate\Database\Eloquent\Builder|EService near($latitude, $longitude)
 * @method static \Illuminate\Database\Eloquent\Builder|EService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EService query()
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService wherePriceUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereQuantityUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EService whereUpdatedAt($value)
 */
	class EService extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia, \Illuminate\Contracts\Database\Eloquent\Castable {}
}

namespace App\Models{
/**
 * App\Models\EServiceCategory
 *
 * @property int $e_service_id
 * @property int $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceCategory whereEServiceId($value)
 */
	class EServiceCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class EServiceReview
 *
 * @package App\Models
 * @version January 23, 2021, 7:42 pm UTC
 * @property User user
 * @property EService eService
 * @property string review
 * @property double rate
 * @property integer user_id
 * @property integer e_service_id
 * @property int $id
 * @property string|null $review
 * @property float $rate
 * @property int $user_id
 * @property int $e_service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EService $eService
 * @property-read mixed $custom_fields
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereEServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EServiceReview whereUserId($value)
 */
	class EServiceReview extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Earning
 *
 * @package App\Models
 * @version January 30, 2021, 1:53 pm UTC
 * @property EProvider eProvider
 * @property integer e_provider_id
 * @property integer total_bookings
 * @property double total_earning
 * @property double admin_earning
 * @property double e_provider_earning
 * @property double taxes
 * @property int $id
 * @property int|null $e_provider_id
 * @property int $total_bookings
 * @property float $total_earning
 * @property float $admin_earning
 * @property float $e_provider_earning
 * @property float $taxes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider|null $eProvider
 * @property-read mixed $custom_fields
 * @method static \Illuminate\Database\Eloquent\Builder|Earning newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earning newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earning query()
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereAdminEarning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereEProviderEarning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereTaxes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereTotalBookings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereTotalEarning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earning whereUpdatedAt($value)
 */
	class Earning extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Experience
 *
 * @package App\Models
 * @version January 12, 2021, 11:16 am UTC
 * @property EProvider eProvider
 * @property string id
 * @property string title
 * @property string description
 * @property integer e_provider_id
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int $e_provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereUpdatedAt($value)
 */
	class Experience extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Faq
 *
 * @package App\Models
 * @version August 29, 2019, 9:39 pm UTC
 * @property \App\Models\FaqCategory faqCategory
 * @property string question
 * @property string answer
 * @property integer faq_category_id
 * @property int $id
 * @property string|null $question
 * @property string|null $answer
 * @property int $faq_category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\FaqCategory $faqCategory
 * @property-read mixed $custom_fields
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereFaqCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * Class FaqCategory
 *
 * @package App\Models
 * @version August 29, 2019, 9:38 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection Faq
 * @property string name
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Faq[] $faqs
 * @property-read int|null $faqs_count
 * @property-read mixed $custom_fields
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereUpdatedAt($value)
 */
	class FaqCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Favorite
 *
 * @package App\Models
 * @version January 22, 2021, 8:58 pm UTC
 * @property EService eService
 * @property Collection option
 * @property User user
 * @property integer e_service_id
 * @property bigInteger user_id
 * @property int $id
 * @property int $e_service_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EService $eService
 * @property-read mixed $custom_fields
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @property-read int|null $options_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereEServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereUserId($value)
 */
	class Favorite extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Gallery
 *
 * @package App\Models
 * @version January 23, 2021, 8:15 pm UTC
 * @property EProvider eProvider
 * @property string description
 * @property integer e_provider_id
 * @property int $id
 * @property string|null $description
 * @property int $e_provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider $eProvider
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 */
	class Gallery extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Media
 *
 * @property mixed size
 * @property int $id
 * @property string $model_type
 * @property int $model_id
 * @property string $collection_name
 * @property string $name
 * @property string $file_name
 * @property string|null $mime_type
 * @property string $disk
 * @property int $size
 * @property array $manipulations
 * @property array $custom_properties
 * @property array $responsive_images
 * @property int|null $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $extension
 * @property-read mixed $formated_size
 * @property-read string $human_readable_size
 * @property-read mixed $icon
 * @property-read mixed $thumb
 * @property-read string $type
 * @property-read mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection|Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 */
	class Media extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class Notification
 *
 * @package App\Models
 * @version September 4, 2019, 10:30 am UTC
 * @property NotificationType notificationType
 * @property User user
 * @property string type
 * @property string read
 * @property string $id
 * @property string $type
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property string $data
 * @property \Illuminate\Support\Carbon|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Option
 *
 * @package App\Models
 * @version January 22, 2021, 8:08 pm UTC
 * @property EService eService
 * @property OptionGroup optionGroup
 * @property integer id
 * @property string name
 * @property string description
 * @property double price
 * @property integer e_service_id
 * @property integer option_group_id
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property float $price
 * @property int $e_service_id
 * @property int $option_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EService $eService
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\OptionGroup $optionGroup
 * @method static \Illuminate\Database\Eloquent\Builder|Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereEServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedAt($value)
 */
	class Option extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class OptionGroup
 *
 * @package App\Models
 * @version January 22, 2021, 7:45 pm UTC
 * @property string name
 * @property Collection options
 * @property boolean allow_multiple
 * @property int $id
 * @property string|null $name
 * @property bool $allow_multiple
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @property-read int|null $options_count
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereAllowMultiple($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionGroup whereUpdatedAt($value)
 */
	class OptionGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Payment
 *
 * @package App\Models
 * @version January 7, 2021, 4:54 pm UTC
 * @property User user
 * @property Booking booking
 * @property PaymentMethod paymentMethod
 * @property PaymentStatus paymentStatus
 * @property double amount
 * @property string description
 * @property integer user_id
 * @property integer payment_method_id
 * @property integer payment_status_id
 * @property int $id
 * @property float $amount
 * @property string|null $description
 * @property int $user_id
 * @property int $payment_method_id
 * @property int $payment_status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Booking|null $booking
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read \App\Models\PaymentMethod $paymentMethod
 * @property-read \App\Models\PaymentStatus $paymentStatus
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUserId($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class PaymentMethod
 *
 * @package App\Models
 * @version January 7, 2021, 4:26 pm UTC
 * @property string name
 * @property string description
 * @property string route
 * @property integer order
 * @property boolean default
 * @property boolean enabled
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string $route
 * @property int $order
 * @property bool $default
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class PaymentStatus
 *
 * @package App\Models
 * @version January 7, 2021, 4:47 pm UTC
 * @property string status
 * @property integer order
 * @property int $id
 * @property string|null $status
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentStatus whereUpdatedAt($value)
 */
	class PaymentStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Slide
 *
 * @package App\Models
 * @version January 25, 2021, 10:54 am UTC
 * @property EService eService
 * @property EProvider eProvider
 * @property integer order
 * @property string text
 * @property string button
 * @property string text_position
 * @property string text_color
 * @property string button_color
 * @property string background_color
 * @property string indicator_color
 * @property string image_fit
 * @property integer e_service_id
 * @property integer e_provider_id
 * @property boolean enabled
 * @property int $id
 * @property int|null $order
 * @property string|null $text
 * @property string|null $button
 * @property string|null $text_position
 * @property string|null $text_color
 * @property string|null $button_color
 * @property string|null $background_color
 * @property string|null $indicator_color
 * @property string|null $image_fit
 * @property int|null $e_service_id
 * @property int|null $e_provider_id
 * @property bool|null $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \App\Models\EProvider|null $eProvider
 * @property-read \App\Models\EService|null $eService
 * @property-read mixed $custom_fields
 * @property-read bool $has_media
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereBackgroundColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereButton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereButtonColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereEProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereEServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereImageFit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereIndicatorColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereTextColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereTextPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slide whereUpdatedAt($value)
 */
	class Slide extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class Country
 *
 * @package App\Models
 * @version October 22, 2019, 2:46 pm UTC
 * @property string name
 * @property string symbol
 * @property string code
 * @property unsignedTinyInteger decimal_digits
 * @property unsignedTinyInteger rounding
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property string $country_code
 * @property string|null $fips_code
 * @property string|null $iso2
 * @property string|null $latitude
 * @property string|null $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $flag
 * @property string|null $wikiDataId Rapid API GeoDB Cities
 * @property string $covered
 * @property-read \App\Models\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCovered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereFipsCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereIso2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereWikiDataId($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Tax
 *
 * @package App\Models
 * @version January 13, 2021, 11:43 am UTC
 * @property integer id
 * @property string name
 * @property double value
 * @property string type
 * @property int $id
 * @property string|null $name
 * @property float $value
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read mixed $custom_fields
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereValue($value)
 */
	class Tax extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Upload
 *
 * @property int $id
 * @property string $uuid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload query()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUuid($value)
 */
	class Upload extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * Class User
 *
 * @package App\Models
 * @version July 10, 2018, 11:44 am UTC
 * @property int id
 * @property string name
 * @property string email
 * @property string phone_number
 * @property string password
 * @property string api_token
 * @property string device_token
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone_number
 * @property \Illuminate\Support\Carbon|null $phone_verified_at
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $api_token
 * @property string|null $device_token
 * @property string|null $stripe_id
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $trial_ends_at
 * @property string|null $paypal_email
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $country_id
 * @property int|null $state_id
 * @property int|null $area_id
 * @property-read \App\Models\Area|null $area
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustomFieldValue[] $customFieldsValues
 * @property-read int|null $custom_fields_values_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EProvider[] $eproviders
 * @property-read int|null $eproviders_count
 * @property-read mixed $custom_fields
 * @property-read bool $has_media
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \App\Models\State|null $state
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Cashier\Subscription[] $subscriptions
 * @property-read int|null $subscriptions_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereApiToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePaypalEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia, \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

