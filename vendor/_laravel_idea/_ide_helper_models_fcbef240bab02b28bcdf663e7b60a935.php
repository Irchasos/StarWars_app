<?php //b6e65486219012191b3511e657631d01
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasManyThrough;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken as PersonalAccessToken1;
    use LaravelIdea\Helper\App\Models\_IH_CharacterFilm_C;
    use LaravelIdea\Helper\App\Models\_IH_CharacterFilm_QB;
    use LaravelIdea\Helper\App\Models\_IH_CharacterStarship_C;
    use LaravelIdea\Helper\App\Models\_IH_CharacterStarship_QB;
    use LaravelIdea\Helper\App\Models\_IH_CharacterVehicle_C;
    use LaravelIdea\Helper\App\Models\_IH_CharacterVehicle_QB;
    use LaravelIdea\Helper\App\Models\_IH_Character_C;
    use LaravelIdea\Helper\App\Models\_IH_Character_QB;
    use LaravelIdea\Helper\App\Models\_IH_FailedJob_C;
    use LaravelIdea\Helper\App\Models\_IH_FailedJob_QB;
    use LaravelIdea\Helper\App\Models\_IH_FilmKind_C;
    use LaravelIdea\Helper\App\Models\_IH_FilmKind_QB;
    use LaravelIdea\Helper\App\Models\_IH_FilmPlanet_C;
    use LaravelIdea\Helper\App\Models\_IH_FilmPlanet_QB;
    use LaravelIdea\Helper\App\Models\_IH_FilmStarship_C;
    use LaravelIdea\Helper\App\Models\_IH_FilmStarship_QB;
    use LaravelIdea\Helper\App\Models\_IH_FilmVehicle_C;
    use LaravelIdea\Helper\App\Models\_IH_FilmVehicle_QB;
    use LaravelIdea\Helper\App\Models\_IH_Film_C;
    use LaravelIdea\Helper\App\Models\_IH_Film_QB;
    use LaravelIdea\Helper\App\Models\_IH_Kind_C;
    use LaravelIdea\Helper\App\Models\_IH_Kind_QB;
    use LaravelIdea\Helper\App\Models\_IH_ModelHasPermission_C;
    use LaravelIdea\Helper\App\Models\_IH_ModelHasPermission_QB;
    use LaravelIdea\Helper\App\Models\_IH_ModelHasRole_C;
    use LaravelIdea\Helper\App\Models\_IH_ModelHasRole_QB;
    use LaravelIdea\Helper\App\Models\_IH_PasswordReset_C;
    use LaravelIdea\Helper\App\Models\_IH_PasswordReset_QB;
    use LaravelIdea\Helper\App\Models\_IH_Permission_C;
    use LaravelIdea\Helper\App\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\App\Models\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\App\Models\_IH_PersonalAccessToken_QB;
    use LaravelIdea\Helper\App\Models\_IH_Photo_C;
    use LaravelIdea\Helper\App\Models\_IH_Photo_QB;
    use LaravelIdea\Helper\App\Models\_IH_Planet_C;
    use LaravelIdea\Helper\App\Models\_IH_Planet_QB;
    use LaravelIdea\Helper\App\Models\_IH_Resident_C;
    use LaravelIdea\Helper\App\Models\_IH_Resident_QB;
    use LaravelIdea\Helper\App\Models\_IH_RoleHasPermission_C;
    use LaravelIdea\Helper\App\Models\_IH_RoleHasPermission_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_Starship_C;
    use LaravelIdea\Helper\App\Models\_IH_Starship_QB;
    use LaravelIdea\Helper\App\Models\_IH_TrailerFilm_C;
    use LaravelIdea\Helper\App\Models\_IH_TrailerFilm_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\App\Models\_IH_Vehicle_C;
    use LaravelIdea\Helper\App\Models\_IH_Vehicle_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C as _IH_PersonalAccessToken_C1;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB as _IH_PersonalAccessToken_QB1;
    
    /**
     * @property int $id
     * @property string $name
     * @property int $planet_id
     * @property int $kind_id
     * @property string $birth_year
     * @property string $eye_color
     * @property string $gender
     * @property string $hair_color
     * @property string $height
     * @property string $mass
     * @property string|null $url
     * @property string $skin_color
     * @property string|null $photo
     * @property _IH_Film_C|Film[] $films
     * @property-read int $films_count
     * @method BelongsToMany|_IH_Film_QB films()
     * @property Kind $kind
     * @method BelongsTo|_IH_Kind_QB kind()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method MorphToMany|_IH_Photo_QB photos()
     * @property Planet $planet
     * @method BelongsTo|_IH_Planet_QB planet()
     * @property _IH_Starship_C|Starship[] $starships
     * @property-read int $starships_count
     * @method BelongsToMany|_IH_Starship_QB starships()
     * @property _IH_Vehicle_C|Vehicle[] $vehicles
     * @property-read int $vehicles_count
     * @method BelongsToMany|_IH_Vehicle_QB vehicles()
     * @method static _IH_Character_QB onWriteConnection()
     * @method _IH_Character_QB newQuery()
     * @method static _IH_Character_QB on(null|string $connection = null)
     * @method static _IH_Character_QB query()
     * @method static _IH_Character_QB with(array|string $relations)
     * @method _IH_Character_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Character_C|Character[] all()
     * @ownLinks planet_id,\App\Models\Planet,id|kind_id,\App\Models\Kind,id
     * @foreignLinks id,\App\Models\CharacterStarship,character_id|id,\App\Models\CharacterVehicle,character_id|id,\App\Models\CharacterFilm,character_id
     * @mixin _IH_Character_QB
     */
    class Character extends Model {}
    
    /**
     * @property int $id
     * @property int $character_id
     * @property int $film_id
     * @property Character $character
     * @method BelongsTo|_IH_Character_QB character()
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @method static _IH_CharacterFilm_QB onWriteConnection()
     * @method _IH_CharacterFilm_QB newQuery()
     * @method static _IH_CharacterFilm_QB on(null|string $connection = null)
     * @method static _IH_CharacterFilm_QB query()
     * @method static _IH_CharacterFilm_QB with(array|string $relations)
     * @method _IH_CharacterFilm_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CharacterFilm_C|CharacterFilm[] all()
     * @ownLinks character_id,\App\Models\Character,id|film_id,\App\Models\Film,id
     * @mixin _IH_CharacterFilm_QB
     */
    class CharacterFilm extends Model {}
    
    /**
     * @property int $id
     * @property int $character_id
     * @property int $starship_id
     * @property Character $character
     * @method BelongsTo|_IH_Character_QB character()
     * @property Starship $starship
     * @method BelongsTo|_IH_Starship_QB starship()
     * @method static _IH_CharacterStarship_QB onWriteConnection()
     * @method _IH_CharacterStarship_QB newQuery()
     * @method static _IH_CharacterStarship_QB on(null|string $connection = null)
     * @method static _IH_CharacterStarship_QB query()
     * @method static _IH_CharacterStarship_QB with(array|string $relations)
     * @method _IH_CharacterStarship_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CharacterStarship_C|CharacterStarship[] all()
     * @ownLinks character_id,\App\Models\Character,id|starship_id,\App\Models\Starship,id
     * @mixin _IH_CharacterStarship_QB
     */
    class CharacterStarship extends Model {}
    
    /**
     * @property int $id
     * @property int $character_id
     * @property int $vehicle_id
     * @property Character $character
     * @method BelongsTo|_IH_Character_QB character()
     * @property Vehicle $vehicle
     * @method BelongsTo|_IH_Vehicle_QB vehicle()
     * @method static _IH_CharacterVehicle_QB onWriteConnection()
     * @method _IH_CharacterVehicle_QB newQuery()
     * @method static _IH_CharacterVehicle_QB on(null|string $connection = null)
     * @method static _IH_CharacterVehicle_QB query()
     * @method static _IH_CharacterVehicle_QB with(array|string $relations)
     * @method _IH_CharacterVehicle_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CharacterVehicle_C|CharacterVehicle[] all()
     * @ownLinks character_id,\App\Models\Character,id|vehicle_id,\App\Models\Vehicle,id
     * @mixin _IH_CharacterVehicle_QB
     */
    class CharacterVehicle extends Model {}
    
    /**
     * @property int $id
     * @property string $uuid
     * @property string $connection
     * @property string $queue
     * @property string $payload
     * @property string $exception
     * @property Carbon $failed_at
     * @method static _IH_FailedJob_QB onWriteConnection()
     * @method _IH_FailedJob_QB newQuery()
     * @method static _IH_FailedJob_QB on(null|string $connection = null)
     * @method static _IH_FailedJob_QB query()
     * @method static _IH_FailedJob_QB with(array|string $relations)
     * @method _IH_FailedJob_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FailedJob_C|FailedJob[] all()
     * @mixin _IH_FailedJob_QB
     */
    class FailedJob extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $episode_id
     * @property string $opening_crawl
     * @property string $director
     * @property string $producer
     * @property string $release_date
     * @property string $url
     * @property _IH_Character_C|Character[] $characters
     * @property-read int $characters_count
     * @method BelongsToMany|_IH_Character_QB characters()
     * @property _IH_Kind_C|Kind[] $kinds
     * @property-read int $kinds_count
     * @method BelongsToMany|_IH_Kind_QB kinds()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method MorphToMany|_IH_Photo_QB photos()
     * @property _IH_Planet_C|Planet[] $planets
     * @property-read int $planets_count
     * @method BelongsToMany|_IH_Planet_QB planets()
     * @property _IH_Starship_C|Starship[] $starships
     * @property-read int $starships_count
     * @method BelongsToMany|_IH_Starship_QB starships()
     * @property _IH_TrailerFilm_C|TrailerFilm[] $trailers
     * @property-read int $trailers_count
     * @method HasMany|_IH_TrailerFilm_QB trailers()
     * @property _IH_Vehicle_C|Vehicle[] $vehicles
     * @property-read int $vehicles_count
     * @method BelongsToMany|_IH_Vehicle_QB vehicles()
     * @method static _IH_Film_QB onWriteConnection()
     * @method _IH_Film_QB newQuery()
     * @method static _IH_Film_QB on(null|string $connection = null)
     * @method static _IH_Film_QB query()
     * @method static _IH_Film_QB with(array|string $relations)
     * @method _IH_Film_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Film_C|Film[] all()
     * @foreignLinks id,\App\Models\CharacterFilm,film_id|id,\App\Models\FilmPlanet,film_id|id,\App\Models\FilmStarship,film_id|id,\App\Models\FilmVehicle,film_id|id,\App\Models\FilmKind,film_id|id,\App\Models\TrailerFilm,film_id
     * @mixin _IH_Film_QB
     */
    class Film extends Model {}
    
    /**
     * @property int $id
     * @property int $film_id
     * @property int $kind_id
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @property Kind $kind
     * @method BelongsTo|_IH_Kind_QB kind()
     * @method static _IH_FilmKind_QB onWriteConnection()
     * @method _IH_FilmKind_QB newQuery()
     * @method static _IH_FilmKind_QB on(null|string $connection = null)
     * @method static _IH_FilmKind_QB query()
     * @method static _IH_FilmKind_QB with(array|string $relations)
     * @method _IH_FilmKind_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilmKind_C|FilmKind[] all()
     * @ownLinks film_id,\App\Models\Film,id|kind_id,\App\Models\Kind,id
     * @mixin _IH_FilmKind_QB
     */
    class FilmKind extends Model {}
    
    /**
     * @property int $id
     * @property int $film_id
     * @property int $planet_id
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @property Planet $planet
     * @method BelongsTo|_IH_Planet_QB planet()
     * @method static _IH_FilmPlanet_QB onWriteConnection()
     * @method _IH_FilmPlanet_QB newQuery()
     * @method static _IH_FilmPlanet_QB on(null|string $connection = null)
     * @method static _IH_FilmPlanet_QB query()
     * @method static _IH_FilmPlanet_QB with(array|string $relations)
     * @method _IH_FilmPlanet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilmPlanet_C|FilmPlanet[] all()
     * @ownLinks film_id,\App\Models\Film,id|planet_id,\App\Models\Planet,id
     * @mixin _IH_FilmPlanet_QB
     */
    class FilmPlanet extends Model {}
    
    /**
     * @property int $id
     * @property int $film_id
     * @property int $starship_id
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @property Starship $starship
     * @method BelongsTo|_IH_Starship_QB starship()
     * @method static _IH_FilmStarship_QB onWriteConnection()
     * @method _IH_FilmStarship_QB newQuery()
     * @method static _IH_FilmStarship_QB on(null|string $connection = null)
     * @method static _IH_FilmStarship_QB query()
     * @method static _IH_FilmStarship_QB with(array|string $relations)
     * @method _IH_FilmStarship_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilmStarship_C|FilmStarship[] all()
     * @ownLinks film_id,\App\Models\Film,id|starship_id,\App\Models\Starship,id
     * @mixin _IH_FilmStarship_QB
     */
    class FilmStarship extends Model {}
    
    /**
     * @property int $id
     * @property int $film_id
     * @property int $vehicle_id
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @property Vehicle $vehicle
     * @method BelongsTo|_IH_Vehicle_QB vehicle()
     * @method static _IH_FilmVehicle_QB onWriteConnection()
     * @method _IH_FilmVehicle_QB newQuery()
     * @method static _IH_FilmVehicle_QB on(null|string $connection = null)
     * @method static _IH_FilmVehicle_QB query()
     * @method static _IH_FilmVehicle_QB with(array|string $relations)
     * @method _IH_FilmVehicle_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilmVehicle_C|FilmVehicle[] all()
     * @ownLinks film_id,\App\Models\Film,id|vehicle_id,\App\Models\Vehicle,id
     * @mixin _IH_FilmVehicle_QB
     */
    class FilmVehicle extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $classification
     * @property string $designation
     * @property string $average_height
     * @property string $skin_colors
     * @property string $hair_colors
     * @property string $eye_colors
     * @property string $average_lifespan
     * @property string $language
     * @property string $url
     * @property _IH_Character_C|Character[] $characters
     * @property-read int $characters_count
     * @method HasMany|_IH_Character_QB characters()
     * @property _IH_Film_C|Film[] $films
     * @property-read int $films_count
     * @method BelongsToMany|_IH_Film_QB films()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method HasManyThrough|_IH_Photo_QB photos()
     * @method static _IH_Kind_QB onWriteConnection()
     * @method _IH_Kind_QB newQuery()
     * @method static _IH_Kind_QB on(null|string $connection = null)
     * @method static _IH_Kind_QB query()
     * @method static _IH_Kind_QB with(array|string $relations)
     * @method _IH_Kind_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Kind_C|Kind[] all()
     * @foreignLinks id,\App\Models\Character,kind_id|id,\App\Models\FilmKind,kind_id
     * @mixin _IH_Kind_QB
     */
    class Kind extends Model {}
    
    /**
     * @property string $model_type
     * @property int $model_id
     * @property int $team_id
     * @property Permission $permission
     * @method BelongsTo|_IH_Permission_QB permission()
     * @method static _IH_ModelHasPermission_QB onWriteConnection()
     * @method _IH_ModelHasPermission_QB newQuery()
     * @method static _IH_ModelHasPermission_QB on(null|string $connection = null)
     * @method static _IH_ModelHasPermission_QB query()
     * @method static _IH_ModelHasPermission_QB with(array|string $relations)
     * @method _IH_ModelHasPermission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ModelHasPermission_C|ModelHasPermission[] all()
     * @mixin _IH_ModelHasPermission_QB
     */
    class ModelHasPermission extends Model {}
    
    /**
     * @property string $model_type
     * @property int $model_id
     * @property int $team_id
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @method static _IH_ModelHasRole_QB onWriteConnection()
     * @method _IH_ModelHasRole_QB newQuery()
     * @method static _IH_ModelHasRole_QB on(null|string $connection = null)
     * @method static _IH_ModelHasRole_QB query()
     * @method static _IH_ModelHasRole_QB with(array|string $relations)
     * @method _IH_ModelHasRole_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ModelHasRole_C|ModelHasRole[] all()
     * @mixin _IH_ModelHasRole_QB
     */
    class ModelHasRole extends Model {}
    
    /**
     * @property string $email
     * @property string $token
     * @property Carbon|null $created_at
     * @method static _IH_PasswordReset_QB onWriteConnection()
     * @method _IH_PasswordReset_QB newQuery()
     * @method static _IH_PasswordReset_QB on(null|string $connection = null)
     * @method static _IH_PasswordReset_QB query()
     * @method static _IH_PasswordReset_QB with(array|string $relations)
     * @method _IH_PasswordReset_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PasswordReset_C|PasswordReset[] all()
     * @mixin _IH_PasswordReset_QB
     */
    class PasswordReset extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_ModelHasPermission_C|ModelHasPermission[] $model_has_permissions
     * @property-read int $model_has_permissions_count
     * @method HasMany|_IH_ModelHasPermission_QB model_has_permissions()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Permission_C|Permission[] all()
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}
    
    /**
     * @property int $id
     * @property int $tokenable_id
     * @property string $tokenable_type
     * @property string $name
     * @property string $token
     * @property string|null $abilities
     * @property Carbon|null $last_used_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PersonalAccessToken_QB onWriteConnection()
     * @method _IH_PersonalAccessToken_QB newQuery()
     * @method static _IH_PersonalAccessToken_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessToken_QB query()
     * @method static _IH_PersonalAccessToken_QB with(array|string $relations)
     * @method _IH_PersonalAccessToken_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PersonalAccessToken_C|PersonalAccessToken[] all()
     * @mixin _IH_PersonalAccessToken_QB
     */
    class PersonalAccessToken extends Model {}
    
    /**
     * @property int $id
     * @property int $photoable_id
     * @property string $photoable_type
     * @property string $path
     * @property Model $photoable
     * @method MorphTo photoable()
     * @method static _IH_Photo_QB onWriteConnection()
     * @method _IH_Photo_QB newQuery()
     * @method static _IH_Photo_QB on(null|string $connection = null)
     * @method static _IH_Photo_QB query()
     * @method static _IH_Photo_QB with(array|string $relations)
     * @method _IH_Photo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Photo_C|Photo[] all()
     * @mixin _IH_Photo_QB
     */
    class Photo extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $rotation_period
     * @property string $orbital_period
     * @property string $diameter
     * @property string $climate
     * @property string $gravity
     * @property string $terrain
     * @property string $surface_water
     * @property string $population
     * @property string|null $url
     * @property _IH_Character_C|Character[] $characters
     * @property-read int $characters_count
     * @method HasMany|_IH_Character_QB characters()
     * @property _IH_Film_C|Film[] $films
     * @property-read int $films_count
     * @method BelongsToMany|_IH_Film_QB films()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method MorphToMany|_IH_Photo_QB photos()
     * @method static _IH_Planet_QB onWriteConnection()
     * @method _IH_Planet_QB newQuery()
     * @method static _IH_Planet_QB on(null|string $connection = null)
     * @method static _IH_Planet_QB query()
     * @method static _IH_Planet_QB with(array|string $relations)
     * @method _IH_Planet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Planet_C|Planet[] all()
     * @foreignLinks id,\App\Models\Character,planet_id|id,\App\Models\FilmPlanet,planet_id
     * @mixin _IH_Planet_QB
     */
    class Planet extends Model {}
    
    /**
     * @method static _IH_Resident_QB onWriteConnection()
     * @method _IH_Resident_QB newQuery()
     * @method static _IH_Resident_QB on(null|string $connection = null)
     * @method static _IH_Resident_QB query()
     * @method static _IH_Resident_QB with(array|string $relations)
     * @method _IH_Resident_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Resident_C|Resident[] all()
     * @mixin _IH_Resident_QB
     */
    class Resident extends Model {}
    
    /**
     * @property int $id
     * @property int|null $team_id
     * @property string $name
     * @property string $guard_name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_ModelHasRole_C|ModelHasRole[] $model_has_roles
     * @property-read int $model_has_roles_count
     * @method HasMany|_IH_ModelHasRole_QB model_has_roles()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method BelongsToMany|_IH_Permission_QB permissions()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}
    
    /**
     * @property Permission $permission
     * @method BelongsTo|_IH_Permission_QB permission()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @method static _IH_RoleHasPermission_QB onWriteConnection()
     * @method _IH_RoleHasPermission_QB newQuery()
     * @method static _IH_RoleHasPermission_QB on(null|string $connection = null)
     * @method static _IH_RoleHasPermission_QB query()
     * @method static _IH_RoleHasPermission_QB with(array|string $relations)
     * @method _IH_RoleHasPermission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RoleHasPermission_C|RoleHasPermission[] all()
     * @mixin _IH_RoleHasPermission_QB
     */
    class RoleHasPermission extends Model {}
    
    /**
     * @property int $id
     * @property string|null $MGLT
     * @property string|null $cargo_capacity
     * @property string|null $consumables
     * @property string|null $cost_in_credits
     * @property string|null $crew
     * @property string|null $hyperdrive_rating
     * @property string|null $length
     * @property string|null $manufacturer
     * @property string|null $max_atmosphering_speed
     * @property string $model
     * @property string $name
     * @property string|null $starship_class
     * @property string|null $url
     * @property string|null $passengers
     * @property _IH_Character_C|Character[] $characters
     * @property-read int $characters_count
     * @method BelongsToMany|_IH_Character_QB characters()
     * @property _IH_Film_C|Film[] $films
     * @property-read int $films_count
     * @method BelongsToMany|_IH_Film_QB films()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method MorphToMany|_IH_Photo_QB photos()
     * @method static _IH_Starship_QB onWriteConnection()
     * @method _IH_Starship_QB newQuery()
     * @method static _IH_Starship_QB on(null|string $connection = null)
     * @method static _IH_Starship_QB query()
     * @method static _IH_Starship_QB with(array|string $relations)
     * @method _IH_Starship_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Starship_C|Starship[] all()
     * @foreignLinks id,\App\Models\CharacterStarship,starship_id|id,\App\Models\FilmStarship,starship_id
     * @mixin _IH_Starship_QB
     */
    class Starship extends Model {}
    
    /**
     * @property int $id
     * @property int $film_id
     * @property string $path
     * @property Film $film
     * @method BelongsTo|_IH_Film_QB film()
     * @method static _IH_TrailerFilm_QB onWriteConnection()
     * @method _IH_TrailerFilm_QB newQuery()
     * @method static _IH_TrailerFilm_QB on(null|string $connection = null)
     * @method static _IH_TrailerFilm_QB query()
     * @method static _IH_TrailerFilm_QB with(array|string $relations)
     * @method _IH_TrailerFilm_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TrailerFilm_C|TrailerFilm[] all()
     * @ownLinks film_id,\App\Models\Film,id
     * @mixin _IH_TrailerFilm_QB
     */
    class TrailerFilm extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_PersonalAccessToken_C1|PersonalAccessToken1[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB1 tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(...$parameters)
     */
    class User extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $model
     * @property string $vehicle_class
     * @property string $manufacturer
     * @property string $length
     * @property string $cost_in_credits
     * @property string $crew
     * @property string $passengers
     * @property string $max_atmosphering_speed
     * @property string $cargo_capacity
     * @property string $consumables
     * @property string $url
     * @property _IH_Character_C|Character[] $characters
     * @property-read int $characters_count
     * @method BelongsToMany|_IH_Character_QB characters()
     * @property _IH_Film_C|Film[] $films
     * @property-read int $films_count
     * @method BelongsToMany|_IH_Film_QB films()
     * @property _IH_Photo_C|Photo[] $photos
     * @property-read int $photos_count
     * @method MorphToMany|_IH_Photo_QB photos()
     * @method static _IH_Vehicle_QB onWriteConnection()
     * @method _IH_Vehicle_QB newQuery()
     * @method static _IH_Vehicle_QB on(null|string $connection = null)
     * @method static _IH_Vehicle_QB query()
     * @method static _IH_Vehicle_QB with(array|string $relations)
     * @method _IH_Vehicle_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Vehicle_C|Vehicle[] all()
     * @foreignLinks id,\App\Models\CharacterVehicle,vehicle_id|id,\App\Models\FilmVehicle,vehicle_id
     * @mixin _IH_Vehicle_QB
     */
    class Vehicle extends Model {}
}