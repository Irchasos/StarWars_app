<?php //bd211495f2763e3c678527aeaccbf9fc
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Character;
    use App\Models\CharacterFilm;
    use App\Models\CharacterStarship;
    use App\Models\CharacterVehicle;
    use App\Models\FailedJob;
    use App\Models\Film;
    use App\Models\FilmKind;
    use App\Models\FilmPlanet;
    use App\Models\FilmStarship;
    use App\Models\FilmVehicle;
    use App\Models\Kind;
    use App\Models\ModelHasPermission;
    use App\Models\ModelHasRole;
    use App\Models\PasswordReset;
    use App\Models\Permission;
    use App\Models\PersonalAccessToken;
    use App\Models\Photo;
    use App\Models\Planet;
    use App\Models\Resident;
    use App\Models\Role;
    use App\Models\RoleHasPermission;
    use App\Models\Starship;
    use App\Models\TrailerFilm;
    use App\Models\User;
    use App\Models\Vehicle;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method CharacterFilm|null getOrPut($key, $value)
     * @method CharacterFilm|$this shift(int $count = 1)
     * @method CharacterFilm|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CharacterFilm|$this pop(int $count = 1)
     * @method CharacterFilm|null pull($key, $default = null)
     * @method CharacterFilm|null last(callable $callback = null, $default = null)
     * @method CharacterFilm|$this random(int|null $number = null)
     * @method CharacterFilm|null sole($key = null, $operator = null, $value = null)
     * @method CharacterFilm|null get($key, $default = null)
     * @method CharacterFilm|null first(callable $callback = null, $default = null)
     * @method CharacterFilm|null firstWhere(string $key, $operator = null, $value = null)
     * @method CharacterFilm|null find($key, $default = null)
     * @method CharacterFilm[] all()
     */
    class _IH_CharacterFilm_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CharacterFilm[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CharacterFilm_QB whereId($value)
     * @method _IH_CharacterFilm_QB whereCharacterId($value)
     * @method _IH_CharacterFilm_QB whereFilmId($value)
     * @method CharacterFilm baseSole(array|string $columns = ['*'])
     * @method CharacterFilm create(array $attributes = [])
     * @method _IH_CharacterFilm_C|CharacterFilm[] cursor()
     * @method CharacterFilm|null|_IH_CharacterFilm_C|CharacterFilm[] find($id, array $columns = ['*'])
     * @method _IH_CharacterFilm_C|CharacterFilm[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CharacterFilm|_IH_CharacterFilm_C|CharacterFilm[] findOrFail($id, array $columns = ['*'])
     * @method CharacterFilm|_IH_CharacterFilm_C|CharacterFilm[] findOrNew($id, array $columns = ['*'])
     * @method CharacterFilm first(array|string $columns = ['*'])
     * @method CharacterFilm firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CharacterFilm firstOrCreate(array $attributes = [], array $values = [])
     * @method CharacterFilm firstOrFail(array $columns = ['*'])
     * @method CharacterFilm firstOrNew(array $attributes = [], array $values = [])
     * @method CharacterFilm firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CharacterFilm forceCreate(array $attributes)
     * @method _IH_CharacterFilm_C|CharacterFilm[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CharacterFilm_C|CharacterFilm[] get(array|string $columns = ['*'])
     * @method CharacterFilm getModel()
     * @method CharacterFilm[] getModels(array|string $columns = ['*'])
     * @method _IH_CharacterFilm_C|CharacterFilm[] hydrate(array $items)
     * @method CharacterFilm make(array $attributes = [])
     * @method CharacterFilm newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CharacterFilm[]|_IH_CharacterFilm_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CharacterFilm[]|_IH_CharacterFilm_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CharacterFilm sole(array|string $columns = ['*'])
     * @method CharacterFilm updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CharacterFilm_QB extends _BaseBuilder {}
    
    /**
     * @method CharacterStarship|null getOrPut($key, $value)
     * @method CharacterStarship|$this shift(int $count = 1)
     * @method CharacterStarship|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CharacterStarship|$this pop(int $count = 1)
     * @method CharacterStarship|null pull($key, $default = null)
     * @method CharacterStarship|null last(callable $callback = null, $default = null)
     * @method CharacterStarship|$this random(int|null $number = null)
     * @method CharacterStarship|null sole($key = null, $operator = null, $value = null)
     * @method CharacterStarship|null get($key, $default = null)
     * @method CharacterStarship|null first(callable $callback = null, $default = null)
     * @method CharacterStarship|null firstWhere(string $key, $operator = null, $value = null)
     * @method CharacterStarship|null find($key, $default = null)
     * @method CharacterStarship[] all()
     */
    class _IH_CharacterStarship_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CharacterStarship[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CharacterStarship_QB whereId($value)
     * @method _IH_CharacterStarship_QB whereCharacterId($value)
     * @method _IH_CharacterStarship_QB whereStarshipId($value)
     * @method CharacterStarship baseSole(array|string $columns = ['*'])
     * @method CharacterStarship create(array $attributes = [])
     * @method _IH_CharacterStarship_C|CharacterStarship[] cursor()
     * @method CharacterStarship|null|_IH_CharacterStarship_C|CharacterStarship[] find($id, array $columns = ['*'])
     * @method _IH_CharacterStarship_C|CharacterStarship[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CharacterStarship|_IH_CharacterStarship_C|CharacterStarship[] findOrFail($id, array $columns = ['*'])
     * @method CharacterStarship|_IH_CharacterStarship_C|CharacterStarship[] findOrNew($id, array $columns = ['*'])
     * @method CharacterStarship first(array|string $columns = ['*'])
     * @method CharacterStarship firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CharacterStarship firstOrCreate(array $attributes = [], array $values = [])
     * @method CharacterStarship firstOrFail(array $columns = ['*'])
     * @method CharacterStarship firstOrNew(array $attributes = [], array $values = [])
     * @method CharacterStarship firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CharacterStarship forceCreate(array $attributes)
     * @method _IH_CharacterStarship_C|CharacterStarship[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CharacterStarship_C|CharacterStarship[] get(array|string $columns = ['*'])
     * @method CharacterStarship getModel()
     * @method CharacterStarship[] getModels(array|string $columns = ['*'])
     * @method _IH_CharacterStarship_C|CharacterStarship[] hydrate(array $items)
     * @method CharacterStarship make(array $attributes = [])
     * @method CharacterStarship newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CharacterStarship[]|_IH_CharacterStarship_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CharacterStarship[]|_IH_CharacterStarship_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CharacterStarship sole(array|string $columns = ['*'])
     * @method CharacterStarship updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CharacterStarship_QB extends _BaseBuilder {}
    
    /**
     * @method CharacterVehicle|null getOrPut($key, $value)
     * @method CharacterVehicle|$this shift(int $count = 1)
     * @method CharacterVehicle|null firstOrFail($key = null, $operator = null, $value = null)
     * @method CharacterVehicle|$this pop(int $count = 1)
     * @method CharacterVehicle|null pull($key, $default = null)
     * @method CharacterVehicle|null last(callable $callback = null, $default = null)
     * @method CharacterVehicle|$this random(int|null $number = null)
     * @method CharacterVehicle|null sole($key = null, $operator = null, $value = null)
     * @method CharacterVehicle|null get($key, $default = null)
     * @method CharacterVehicle|null first(callable $callback = null, $default = null)
     * @method CharacterVehicle|null firstWhere(string $key, $operator = null, $value = null)
     * @method CharacterVehicle|null find($key, $default = null)
     * @method CharacterVehicle[] all()
     */
    class _IH_CharacterVehicle_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CharacterVehicle[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CharacterVehicle_QB whereId($value)
     * @method _IH_CharacterVehicle_QB whereCharacterId($value)
     * @method _IH_CharacterVehicle_QB whereVehicleId($value)
     * @method CharacterVehicle baseSole(array|string $columns = ['*'])
     * @method CharacterVehicle create(array $attributes = [])
     * @method _IH_CharacterVehicle_C|CharacterVehicle[] cursor()
     * @method CharacterVehicle|null|_IH_CharacterVehicle_C|CharacterVehicle[] find($id, array $columns = ['*'])
     * @method _IH_CharacterVehicle_C|CharacterVehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method CharacterVehicle|_IH_CharacterVehicle_C|CharacterVehicle[] findOrFail($id, array $columns = ['*'])
     * @method CharacterVehicle|_IH_CharacterVehicle_C|CharacterVehicle[] findOrNew($id, array $columns = ['*'])
     * @method CharacterVehicle first(array|string $columns = ['*'])
     * @method CharacterVehicle firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method CharacterVehicle firstOrCreate(array $attributes = [], array $values = [])
     * @method CharacterVehicle firstOrFail(array $columns = ['*'])
     * @method CharacterVehicle firstOrNew(array $attributes = [], array $values = [])
     * @method CharacterVehicle firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CharacterVehicle forceCreate(array $attributes)
     * @method _IH_CharacterVehicle_C|CharacterVehicle[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CharacterVehicle_C|CharacterVehicle[] get(array|string $columns = ['*'])
     * @method CharacterVehicle getModel()
     * @method CharacterVehicle[] getModels(array|string $columns = ['*'])
     * @method _IH_CharacterVehicle_C|CharacterVehicle[] hydrate(array $items)
     * @method CharacterVehicle make(array $attributes = [])
     * @method CharacterVehicle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CharacterVehicle[]|_IH_CharacterVehicle_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CharacterVehicle[]|_IH_CharacterVehicle_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CharacterVehicle sole(array|string $columns = ['*'])
     * @method CharacterVehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CharacterVehicle_QB extends _BaseBuilder {}
    
    /**
     * @method Character|null getOrPut($key, $value)
     * @method Character|$this shift(int $count = 1)
     * @method Character|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Character|$this pop(int $count = 1)
     * @method Character|null pull($key, $default = null)
     * @method Character|null last(callable $callback = null, $default = null)
     * @method Character|$this random(int|null $number = null)
     * @method Character|null sole($key = null, $operator = null, $value = null)
     * @method Character|null get($key, $default = null)
     * @method Character|null first(callable $callback = null, $default = null)
     * @method Character|null firstWhere(string $key, $operator = null, $value = null)
     * @method Character|null find($key, $default = null)
     * @method Character[] all()
     */
    class _IH_Character_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Character[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Character_QB whereId($value)
     * @method _IH_Character_QB whereName($value)
     * @method _IH_Character_QB wherePlanetId($value)
     * @method _IH_Character_QB whereKindId($value)
     * @method _IH_Character_QB whereBirthYear($value)
     * @method _IH_Character_QB whereEyeColor($value)
     * @method _IH_Character_QB whereGender($value)
     * @method _IH_Character_QB whereHairColor($value)
     * @method _IH_Character_QB whereHeight($value)
     * @method _IH_Character_QB whereMass($value)
     * @method _IH_Character_QB whereUrl($value)
     * @method _IH_Character_QB whereSkinColor($value)
     * @method _IH_Character_QB wherePhoto($value)
     * @method Character baseSole(array|string $columns = ['*'])
     * @method Character create(array $attributes = [])
     * @method _IH_Character_C|Character[] cursor()
     * @method Character|null|_IH_Character_C|Character[] find($id, array $columns = ['*'])
     * @method _IH_Character_C|Character[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Character|_IH_Character_C|Character[] findOrFail($id, array $columns = ['*'])
     * @method Character|_IH_Character_C|Character[] findOrNew($id, array $columns = ['*'])
     * @method Character first(array|string $columns = ['*'])
     * @method Character firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Character firstOrCreate(array $attributes = [], array $values = [])
     * @method Character firstOrFail(array $columns = ['*'])
     * @method Character firstOrNew(array $attributes = [], array $values = [])
     * @method Character firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Character forceCreate(array $attributes)
     * @method _IH_Character_C|Character[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Character_C|Character[] get(array|string $columns = ['*'])
     * @method Character getModel()
     * @method Character[] getModels(array|string $columns = ['*'])
     * @method _IH_Character_C|Character[] hydrate(array $items)
     * @method Character make(array $attributes = [])
     * @method Character newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Character[]|_IH_Character_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Character[]|_IH_Character_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Character sole(array|string $columns = ['*'])
     * @method Character updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Character_QB extends _BaseBuilder {}
    
    /**
     * @method FailedJob|null getOrPut($key, $value)
     * @method FailedJob|$this shift(int $count = 1)
     * @method FailedJob|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FailedJob|$this pop(int $count = 1)
     * @method FailedJob|null pull($key, $default = null)
     * @method FailedJob|null last(callable $callback = null, $default = null)
     * @method FailedJob|$this random(int|null $number = null)
     * @method FailedJob|null sole($key = null, $operator = null, $value = null)
     * @method FailedJob|null get($key, $default = null)
     * @method FailedJob|null first(callable $callback = null, $default = null)
     * @method FailedJob|null firstWhere(string $key, $operator = null, $value = null)
     * @method FailedJob|null find($key, $default = null)
     * @method FailedJob[] all()
     */
    class _IH_FailedJob_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FailedJob[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FailedJob_QB whereId($value)
     * @method _IH_FailedJob_QB whereUuid($value)
     * @method _IH_FailedJob_QB whereConnection($value)
     * @method _IH_FailedJob_QB whereQueue($value)
     * @method _IH_FailedJob_QB wherePayload($value)
     * @method _IH_FailedJob_QB whereException($value)
     * @method _IH_FailedJob_QB whereFailedAt($value)
     * @method FailedJob baseSole(array|string $columns = ['*'])
     * @method FailedJob create(array $attributes = [])
     * @method _IH_FailedJob_C|FailedJob[] cursor()
     * @method FailedJob|null|_IH_FailedJob_C|FailedJob[] find($id, array $columns = ['*'])
     * @method _IH_FailedJob_C|FailedJob[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FailedJob|_IH_FailedJob_C|FailedJob[] findOrFail($id, array $columns = ['*'])
     * @method FailedJob|_IH_FailedJob_C|FailedJob[] findOrNew($id, array $columns = ['*'])
     * @method FailedJob first(array|string $columns = ['*'])
     * @method FailedJob firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FailedJob firstOrCreate(array $attributes = [], array $values = [])
     * @method FailedJob firstOrFail(array $columns = ['*'])
     * @method FailedJob firstOrNew(array $attributes = [], array $values = [])
     * @method FailedJob firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FailedJob forceCreate(array $attributes)
     * @method _IH_FailedJob_C|FailedJob[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FailedJob_C|FailedJob[] get(array|string $columns = ['*'])
     * @method FailedJob getModel()
     * @method FailedJob[] getModels(array|string $columns = ['*'])
     * @method _IH_FailedJob_C|FailedJob[] hydrate(array $items)
     * @method FailedJob make(array $attributes = [])
     * @method FailedJob newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FailedJob[]|_IH_FailedJob_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FailedJob[]|_IH_FailedJob_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FailedJob sole(array|string $columns = ['*'])
     * @method FailedJob updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FailedJob_QB extends _BaseBuilder {}
    
    /**
     * @method FilmKind|null getOrPut($key, $value)
     * @method FilmKind|$this shift(int $count = 1)
     * @method FilmKind|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FilmKind|$this pop(int $count = 1)
     * @method FilmKind|null pull($key, $default = null)
     * @method FilmKind|null last(callable $callback = null, $default = null)
     * @method FilmKind|$this random(int|null $number = null)
     * @method FilmKind|null sole($key = null, $operator = null, $value = null)
     * @method FilmKind|null get($key, $default = null)
     * @method FilmKind|null first(callable $callback = null, $default = null)
     * @method FilmKind|null firstWhere(string $key, $operator = null, $value = null)
     * @method FilmKind|null find($key, $default = null)
     * @method FilmKind[] all()
     */
    class _IH_FilmKind_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilmKind[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilmKind_QB whereId($value)
     * @method _IH_FilmKind_QB whereFilmId($value)
     * @method _IH_FilmKind_QB whereKindId($value)
     * @method FilmKind baseSole(array|string $columns = ['*'])
     * @method FilmKind create(array $attributes = [])
     * @method _IH_FilmKind_C|FilmKind[] cursor()
     * @method FilmKind|null|_IH_FilmKind_C|FilmKind[] find($id, array $columns = ['*'])
     * @method _IH_FilmKind_C|FilmKind[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FilmKind|_IH_FilmKind_C|FilmKind[] findOrFail($id, array $columns = ['*'])
     * @method FilmKind|_IH_FilmKind_C|FilmKind[] findOrNew($id, array $columns = ['*'])
     * @method FilmKind first(array|string $columns = ['*'])
     * @method FilmKind firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FilmKind firstOrCreate(array $attributes = [], array $values = [])
     * @method FilmKind firstOrFail(array $columns = ['*'])
     * @method FilmKind firstOrNew(array $attributes = [], array $values = [])
     * @method FilmKind firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilmKind forceCreate(array $attributes)
     * @method _IH_FilmKind_C|FilmKind[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilmKind_C|FilmKind[] get(array|string $columns = ['*'])
     * @method FilmKind getModel()
     * @method FilmKind[] getModels(array|string $columns = ['*'])
     * @method _IH_FilmKind_C|FilmKind[] hydrate(array $items)
     * @method FilmKind make(array $attributes = [])
     * @method FilmKind newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilmKind[]|_IH_FilmKind_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FilmKind[]|_IH_FilmKind_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilmKind sole(array|string $columns = ['*'])
     * @method FilmKind updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilmKind_QB extends _BaseBuilder {}
    
    /**
     * @method FilmPlanet|null getOrPut($key, $value)
     * @method FilmPlanet|$this shift(int $count = 1)
     * @method FilmPlanet|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FilmPlanet|$this pop(int $count = 1)
     * @method FilmPlanet|null pull($key, $default = null)
     * @method FilmPlanet|null last(callable $callback = null, $default = null)
     * @method FilmPlanet|$this random(int|null $number = null)
     * @method FilmPlanet|null sole($key = null, $operator = null, $value = null)
     * @method FilmPlanet|null get($key, $default = null)
     * @method FilmPlanet|null first(callable $callback = null, $default = null)
     * @method FilmPlanet|null firstWhere(string $key, $operator = null, $value = null)
     * @method FilmPlanet|null find($key, $default = null)
     * @method FilmPlanet[] all()
     */
    class _IH_FilmPlanet_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilmPlanet[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilmPlanet_QB whereId($value)
     * @method _IH_FilmPlanet_QB whereFilmId($value)
     * @method _IH_FilmPlanet_QB wherePlanetId($value)
     * @method FilmPlanet baseSole(array|string $columns = ['*'])
     * @method FilmPlanet create(array $attributes = [])
     * @method _IH_FilmPlanet_C|FilmPlanet[] cursor()
     * @method FilmPlanet|null|_IH_FilmPlanet_C|FilmPlanet[] find($id, array $columns = ['*'])
     * @method _IH_FilmPlanet_C|FilmPlanet[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FilmPlanet|_IH_FilmPlanet_C|FilmPlanet[] findOrFail($id, array $columns = ['*'])
     * @method FilmPlanet|_IH_FilmPlanet_C|FilmPlanet[] findOrNew($id, array $columns = ['*'])
     * @method FilmPlanet first(array|string $columns = ['*'])
     * @method FilmPlanet firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FilmPlanet firstOrCreate(array $attributes = [], array $values = [])
     * @method FilmPlanet firstOrFail(array $columns = ['*'])
     * @method FilmPlanet firstOrNew(array $attributes = [], array $values = [])
     * @method FilmPlanet firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilmPlanet forceCreate(array $attributes)
     * @method _IH_FilmPlanet_C|FilmPlanet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilmPlanet_C|FilmPlanet[] get(array|string $columns = ['*'])
     * @method FilmPlanet getModel()
     * @method FilmPlanet[] getModels(array|string $columns = ['*'])
     * @method _IH_FilmPlanet_C|FilmPlanet[] hydrate(array $items)
     * @method FilmPlanet make(array $attributes = [])
     * @method FilmPlanet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilmPlanet[]|_IH_FilmPlanet_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FilmPlanet[]|_IH_FilmPlanet_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilmPlanet sole(array|string $columns = ['*'])
     * @method FilmPlanet updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilmPlanet_QB extends _BaseBuilder {}
    
    /**
     * @method FilmStarship|null getOrPut($key, $value)
     * @method FilmStarship|$this shift(int $count = 1)
     * @method FilmStarship|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FilmStarship|$this pop(int $count = 1)
     * @method FilmStarship|null pull($key, $default = null)
     * @method FilmStarship|null last(callable $callback = null, $default = null)
     * @method FilmStarship|$this random(int|null $number = null)
     * @method FilmStarship|null sole($key = null, $operator = null, $value = null)
     * @method FilmStarship|null get($key, $default = null)
     * @method FilmStarship|null first(callable $callback = null, $default = null)
     * @method FilmStarship|null firstWhere(string $key, $operator = null, $value = null)
     * @method FilmStarship|null find($key, $default = null)
     * @method FilmStarship[] all()
     */
    class _IH_FilmStarship_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilmStarship[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilmStarship_QB whereId($value)
     * @method _IH_FilmStarship_QB whereFilmId($value)
     * @method _IH_FilmStarship_QB whereStarshipId($value)
     * @method FilmStarship baseSole(array|string $columns = ['*'])
     * @method FilmStarship create(array $attributes = [])
     * @method _IH_FilmStarship_C|FilmStarship[] cursor()
     * @method FilmStarship|null|_IH_FilmStarship_C|FilmStarship[] find($id, array $columns = ['*'])
     * @method _IH_FilmStarship_C|FilmStarship[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FilmStarship|_IH_FilmStarship_C|FilmStarship[] findOrFail($id, array $columns = ['*'])
     * @method FilmStarship|_IH_FilmStarship_C|FilmStarship[] findOrNew($id, array $columns = ['*'])
     * @method FilmStarship first(array|string $columns = ['*'])
     * @method FilmStarship firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FilmStarship firstOrCreate(array $attributes = [], array $values = [])
     * @method FilmStarship firstOrFail(array $columns = ['*'])
     * @method FilmStarship firstOrNew(array $attributes = [], array $values = [])
     * @method FilmStarship firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilmStarship forceCreate(array $attributes)
     * @method _IH_FilmStarship_C|FilmStarship[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilmStarship_C|FilmStarship[] get(array|string $columns = ['*'])
     * @method FilmStarship getModel()
     * @method FilmStarship[] getModels(array|string $columns = ['*'])
     * @method _IH_FilmStarship_C|FilmStarship[] hydrate(array $items)
     * @method FilmStarship make(array $attributes = [])
     * @method FilmStarship newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilmStarship[]|_IH_FilmStarship_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FilmStarship[]|_IH_FilmStarship_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilmStarship sole(array|string $columns = ['*'])
     * @method FilmStarship updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilmStarship_QB extends _BaseBuilder {}
    
    /**
     * @method FilmVehicle|null getOrPut($key, $value)
     * @method FilmVehicle|$this shift(int $count = 1)
     * @method FilmVehicle|null firstOrFail($key = null, $operator = null, $value = null)
     * @method FilmVehicle|$this pop(int $count = 1)
     * @method FilmVehicle|null pull($key, $default = null)
     * @method FilmVehicle|null last(callable $callback = null, $default = null)
     * @method FilmVehicle|$this random(int|null $number = null)
     * @method FilmVehicle|null sole($key = null, $operator = null, $value = null)
     * @method FilmVehicle|null get($key, $default = null)
     * @method FilmVehicle|null first(callable $callback = null, $default = null)
     * @method FilmVehicle|null firstWhere(string $key, $operator = null, $value = null)
     * @method FilmVehicle|null find($key, $default = null)
     * @method FilmVehicle[] all()
     */
    class _IH_FilmVehicle_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilmVehicle[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilmVehicle_QB whereId($value)
     * @method _IH_FilmVehicle_QB whereFilmId($value)
     * @method _IH_FilmVehicle_QB whereVehicleId($value)
     * @method FilmVehicle baseSole(array|string $columns = ['*'])
     * @method FilmVehicle create(array $attributes = [])
     * @method _IH_FilmVehicle_C|FilmVehicle[] cursor()
     * @method FilmVehicle|null|_IH_FilmVehicle_C|FilmVehicle[] find($id, array $columns = ['*'])
     * @method _IH_FilmVehicle_C|FilmVehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method FilmVehicle|_IH_FilmVehicle_C|FilmVehicle[] findOrFail($id, array $columns = ['*'])
     * @method FilmVehicle|_IH_FilmVehicle_C|FilmVehicle[] findOrNew($id, array $columns = ['*'])
     * @method FilmVehicle first(array|string $columns = ['*'])
     * @method FilmVehicle firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method FilmVehicle firstOrCreate(array $attributes = [], array $values = [])
     * @method FilmVehicle firstOrFail(array $columns = ['*'])
     * @method FilmVehicle firstOrNew(array $attributes = [], array $values = [])
     * @method FilmVehicle firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilmVehicle forceCreate(array $attributes)
     * @method _IH_FilmVehicle_C|FilmVehicle[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilmVehicle_C|FilmVehicle[] get(array|string $columns = ['*'])
     * @method FilmVehicle getModel()
     * @method FilmVehicle[] getModels(array|string $columns = ['*'])
     * @method _IH_FilmVehicle_C|FilmVehicle[] hydrate(array $items)
     * @method FilmVehicle make(array $attributes = [])
     * @method FilmVehicle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilmVehicle[]|_IH_FilmVehicle_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FilmVehicle[]|_IH_FilmVehicle_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilmVehicle sole(array|string $columns = ['*'])
     * @method FilmVehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilmVehicle_QB extends _BaseBuilder {}
    
    /**
     * @method Film|null getOrPut($key, $value)
     * @method Film|$this shift(int $count = 1)
     * @method Film|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Film|$this pop(int $count = 1)
     * @method Film|null pull($key, $default = null)
     * @method Film|null last(callable $callback = null, $default = null)
     * @method Film|$this random(int|null $number = null)
     * @method Film|null sole($key = null, $operator = null, $value = null)
     * @method Film|null get($key, $default = null)
     * @method Film|null first(callable $callback = null, $default = null)
     * @method Film|null firstWhere(string $key, $operator = null, $value = null)
     * @method Film|null find($key, $default = null)
     * @method Film[] all()
     */
    class _IH_Film_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Film[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Film_QB whereId($value)
     * @method _IH_Film_QB whereTitle($value)
     * @method _IH_Film_QB whereEpisodeId($value)
     * @method _IH_Film_QB whereOpeningCrawl($value)
     * @method _IH_Film_QB whereDirector($value)
     * @method _IH_Film_QB whereProducer($value)
     * @method _IH_Film_QB whereReleaseDate($value)
     * @method _IH_Film_QB whereUrl($value)
     * @method Film baseSole(array|string $columns = ['*'])
     * @method Film create(array $attributes = [])
     * @method _IH_Film_C|Film[] cursor()
     * @method Film|null|_IH_Film_C|Film[] find($id, array $columns = ['*'])
     * @method _IH_Film_C|Film[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Film|_IH_Film_C|Film[] findOrFail($id, array $columns = ['*'])
     * @method Film|_IH_Film_C|Film[] findOrNew($id, array $columns = ['*'])
     * @method Film first(array|string $columns = ['*'])
     * @method Film firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Film firstOrCreate(array $attributes = [], array $values = [])
     * @method Film firstOrFail(array $columns = ['*'])
     * @method Film firstOrNew(array $attributes = [], array $values = [])
     * @method Film firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Film forceCreate(array $attributes)
     * @method _IH_Film_C|Film[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Film_C|Film[] get(array|string $columns = ['*'])
     * @method Film getModel()
     * @method Film[] getModels(array|string $columns = ['*'])
     * @method _IH_Film_C|Film[] hydrate(array $items)
     * @method Film make(array $attributes = [])
     * @method Film newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Film[]|_IH_Film_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Film[]|_IH_Film_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Film sole(array|string $columns = ['*'])
     * @method Film updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Film_QB extends _BaseBuilder {}
    
    /**
     * @method Kind|null getOrPut($key, $value)
     * @method Kind|$this shift(int $count = 1)
     * @method Kind|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Kind|$this pop(int $count = 1)
     * @method Kind|null pull($key, $default = null)
     * @method Kind|null last(callable $callback = null, $default = null)
     * @method Kind|$this random(int|null $number = null)
     * @method Kind|null sole($key = null, $operator = null, $value = null)
     * @method Kind|null get($key, $default = null)
     * @method Kind|null first(callable $callback = null, $default = null)
     * @method Kind|null firstWhere(string $key, $operator = null, $value = null)
     * @method Kind|null find($key, $default = null)
     * @method Kind[] all()
     */
    class _IH_Kind_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Kind[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Kind_QB whereId($value)
     * @method _IH_Kind_QB whereName($value)
     * @method _IH_Kind_QB whereClassification($value)
     * @method _IH_Kind_QB whereDesignation($value)
     * @method _IH_Kind_QB whereAverageHeight($value)
     * @method _IH_Kind_QB whereSkinColors($value)
     * @method _IH_Kind_QB whereHairColors($value)
     * @method _IH_Kind_QB whereEyeColors($value)
     * @method _IH_Kind_QB whereAverageLifespan($value)
     * @method _IH_Kind_QB whereLanguage($value)
     * @method _IH_Kind_QB whereUrl($value)
     * @method Kind baseSole(array|string $columns = ['*'])
     * @method Kind create(array $attributes = [])
     * @method _IH_Kind_C|Kind[] cursor()
     * @method Kind|null|_IH_Kind_C|Kind[] find($id, array $columns = ['*'])
     * @method _IH_Kind_C|Kind[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Kind|_IH_Kind_C|Kind[] findOrFail($id, array $columns = ['*'])
     * @method Kind|_IH_Kind_C|Kind[] findOrNew($id, array $columns = ['*'])
     * @method Kind first(array|string $columns = ['*'])
     * @method Kind firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Kind firstOrCreate(array $attributes = [], array $values = [])
     * @method Kind firstOrFail(array $columns = ['*'])
     * @method Kind firstOrNew(array $attributes = [], array $values = [])
     * @method Kind firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Kind forceCreate(array $attributes)
     * @method _IH_Kind_C|Kind[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Kind_C|Kind[] get(array|string $columns = ['*'])
     * @method Kind getModel()
     * @method Kind[] getModels(array|string $columns = ['*'])
     * @method _IH_Kind_C|Kind[] hydrate(array $items)
     * @method Kind make(array $attributes = [])
     * @method Kind newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Kind[]|_IH_Kind_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Kind[]|_IH_Kind_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Kind sole(array|string $columns = ['*'])
     * @method Kind updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Kind_QB extends _BaseBuilder {}
    
    /**
     * @method ModelHasPermission|null getOrPut($key, $value)
     * @method ModelHasPermission|$this shift(int $count = 1)
     * @method ModelHasPermission|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ModelHasPermission|$this pop(int $count = 1)
     * @method ModelHasPermission|null pull($key, $default = null)
     * @method ModelHasPermission|null last(callable $callback = null, $default = null)
     * @method ModelHasPermission|$this random(int|null $number = null)
     * @method ModelHasPermission|null sole($key = null, $operator = null, $value = null)
     * @method ModelHasPermission|null get($key, $default = null)
     * @method ModelHasPermission|null first(callable $callback = null, $default = null)
     * @method ModelHasPermission|null firstWhere(string $key, $operator = null, $value = null)
     * @method ModelHasPermission|null find($key, $default = null)
     * @method ModelHasPermission[] all()
     */
    class _IH_ModelHasPermission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ModelHasPermission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ModelHasPermission_QB whereModelType($value)
     * @method _IH_ModelHasPermission_QB whereModelId($value)
     * @method _IH_ModelHasPermission_QB whereTeamId($value)
     * @method ModelHasPermission baseSole(array|string $columns = ['*'])
     * @method ModelHasPermission create(array $attributes = [])
     * @method _IH_ModelHasPermission_C|ModelHasPermission[] cursor()
     * @method ModelHasPermission|null|_IH_ModelHasPermission_C|ModelHasPermission[] find($id, array $columns = ['*'])
     * @method _IH_ModelHasPermission_C|ModelHasPermission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ModelHasPermission|_IH_ModelHasPermission_C|ModelHasPermission[] findOrFail($id, array $columns = ['*'])
     * @method ModelHasPermission|_IH_ModelHasPermission_C|ModelHasPermission[] findOrNew($id, array $columns = ['*'])
     * @method ModelHasPermission first(array|string $columns = ['*'])
     * @method ModelHasPermission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ModelHasPermission firstOrCreate(array $attributes = [], array $values = [])
     * @method ModelHasPermission firstOrFail(array $columns = ['*'])
     * @method ModelHasPermission firstOrNew(array $attributes = [], array $values = [])
     * @method ModelHasPermission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ModelHasPermission forceCreate(array $attributes)
     * @method _IH_ModelHasPermission_C|ModelHasPermission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ModelHasPermission_C|ModelHasPermission[] get(array|string $columns = ['*'])
     * @method ModelHasPermission getModel()
     * @method ModelHasPermission[] getModels(array|string $columns = ['*'])
     * @method _IH_ModelHasPermission_C|ModelHasPermission[] hydrate(array $items)
     * @method ModelHasPermission make(array $attributes = [])
     * @method ModelHasPermission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ModelHasPermission[]|_IH_ModelHasPermission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ModelHasPermission[]|_IH_ModelHasPermission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ModelHasPermission sole(array|string $columns = ['*'])
     * @method ModelHasPermission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ModelHasPermission_QB extends _BaseBuilder {}
    
    /**
     * @method ModelHasRole|null getOrPut($key, $value)
     * @method ModelHasRole|$this shift(int $count = 1)
     * @method ModelHasRole|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ModelHasRole|$this pop(int $count = 1)
     * @method ModelHasRole|null pull($key, $default = null)
     * @method ModelHasRole|null last(callable $callback = null, $default = null)
     * @method ModelHasRole|$this random(int|null $number = null)
     * @method ModelHasRole|null sole($key = null, $operator = null, $value = null)
     * @method ModelHasRole|null get($key, $default = null)
     * @method ModelHasRole|null first(callable $callback = null, $default = null)
     * @method ModelHasRole|null firstWhere(string $key, $operator = null, $value = null)
     * @method ModelHasRole|null find($key, $default = null)
     * @method ModelHasRole[] all()
     */
    class _IH_ModelHasRole_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ModelHasRole[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ModelHasRole_QB whereModelType($value)
     * @method _IH_ModelHasRole_QB whereModelId($value)
     * @method _IH_ModelHasRole_QB whereTeamId($value)
     * @method ModelHasRole baseSole(array|string $columns = ['*'])
     * @method ModelHasRole create(array $attributes = [])
     * @method _IH_ModelHasRole_C|ModelHasRole[] cursor()
     * @method ModelHasRole|null|_IH_ModelHasRole_C|ModelHasRole[] find($id, array $columns = ['*'])
     * @method _IH_ModelHasRole_C|ModelHasRole[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ModelHasRole|_IH_ModelHasRole_C|ModelHasRole[] findOrFail($id, array $columns = ['*'])
     * @method ModelHasRole|_IH_ModelHasRole_C|ModelHasRole[] findOrNew($id, array $columns = ['*'])
     * @method ModelHasRole first(array|string $columns = ['*'])
     * @method ModelHasRole firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ModelHasRole firstOrCreate(array $attributes = [], array $values = [])
     * @method ModelHasRole firstOrFail(array $columns = ['*'])
     * @method ModelHasRole firstOrNew(array $attributes = [], array $values = [])
     * @method ModelHasRole firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ModelHasRole forceCreate(array $attributes)
     * @method _IH_ModelHasRole_C|ModelHasRole[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ModelHasRole_C|ModelHasRole[] get(array|string $columns = ['*'])
     * @method ModelHasRole getModel()
     * @method ModelHasRole[] getModels(array|string $columns = ['*'])
     * @method _IH_ModelHasRole_C|ModelHasRole[] hydrate(array $items)
     * @method ModelHasRole make(array $attributes = [])
     * @method ModelHasRole newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ModelHasRole[]|_IH_ModelHasRole_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ModelHasRole[]|_IH_ModelHasRole_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ModelHasRole sole(array|string $columns = ['*'])
     * @method ModelHasRole updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ModelHasRole_QB extends _BaseBuilder {}
    
    /**
     * @method PasswordReset|null getOrPut($key, $value)
     * @method PasswordReset|$this shift(int $count = 1)
     * @method PasswordReset|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PasswordReset|$this pop(int $count = 1)
     * @method PasswordReset|null pull($key, $default = null)
     * @method PasswordReset|null last(callable $callback = null, $default = null)
     * @method PasswordReset|$this random(int|null $number = null)
     * @method PasswordReset|null sole($key = null, $operator = null, $value = null)
     * @method PasswordReset|null get($key, $default = null)
     * @method PasswordReset|null first(callable $callback = null, $default = null)
     * @method PasswordReset|null firstWhere(string $key, $operator = null, $value = null)
     * @method PasswordReset|null find($key, $default = null)
     * @method PasswordReset[] all()
     */
    class _IH_PasswordReset_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PasswordReset[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PasswordReset_QB whereEmail($value)
     * @method _IH_PasswordReset_QB whereToken($value)
     * @method _IH_PasswordReset_QB whereCreatedAt($value)
     * @method PasswordReset baseSole(array|string $columns = ['*'])
     * @method PasswordReset create(array $attributes = [])
     * @method _IH_PasswordReset_C|PasswordReset[] cursor()
     * @method PasswordReset|null|_IH_PasswordReset_C|PasswordReset[] find($id, array $columns = ['*'])
     * @method _IH_PasswordReset_C|PasswordReset[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PasswordReset|_IH_PasswordReset_C|PasswordReset[] findOrFail($id, array $columns = ['*'])
     * @method PasswordReset|_IH_PasswordReset_C|PasswordReset[] findOrNew($id, array $columns = ['*'])
     * @method PasswordReset first(array|string $columns = ['*'])
     * @method PasswordReset firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PasswordReset firstOrCreate(array $attributes = [], array $values = [])
     * @method PasswordReset firstOrFail(array $columns = ['*'])
     * @method PasswordReset firstOrNew(array $attributes = [], array $values = [])
     * @method PasswordReset firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PasswordReset forceCreate(array $attributes)
     * @method _IH_PasswordReset_C|PasswordReset[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PasswordReset_C|PasswordReset[] get(array|string $columns = ['*'])
     * @method PasswordReset getModel()
     * @method PasswordReset[] getModels(array|string $columns = ['*'])
     * @method _IH_PasswordReset_C|PasswordReset[] hydrate(array $items)
     * @method PasswordReset make(array $attributes = [])
     * @method PasswordReset newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PasswordReset[]|_IH_PasswordReset_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PasswordReset[]|_IH_PasswordReset_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PasswordReset sole(array|string $columns = ['*'])
     * @method PasswordReset updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PasswordReset_QB extends _BaseBuilder {}
    
    /**
     * @method Permission|null getOrPut($key, $value)
     * @method Permission|$this shift(int $count = 1)
     * @method Permission|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null pull($key, $default = null)
     * @method Permission|null last(callable $callback = null, $default = null)
     * @method Permission|$this random(int|null $number = null)
     * @method Permission|null sole($key = null, $operator = null, $value = null)
     * @method Permission|null get($key, $default = null)
     * @method Permission|null first(callable $callback = null, $default = null)
     * @method Permission|null firstWhere(string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereName($value)
     * @method _IH_Permission_QB whereGuardName($value)
     * @method _IH_Permission_QB whereCreatedAt($value)
     * @method _IH_Permission_QB whereUpdatedAt($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Permission_QB extends _BaseBuilder {}
    
    /**
     * @method PersonalAccessToken|null getOrPut($key, $value)
     * @method PersonalAccessToken|$this shift(int $count = 1)
     * @method PersonalAccessToken|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|$this pop(int $count = 1)
     * @method PersonalAccessToken|null pull($key, $default = null)
     * @method PersonalAccessToken|null last(callable $callback = null, $default = null)
     * @method PersonalAccessToken|$this random(int|null $number = null)
     * @method PersonalAccessToken|null sole($key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|null get($key, $default = null)
     * @method PersonalAccessToken|null first(callable $callback = null, $default = null)
     * @method PersonalAccessToken|null firstWhere(string $key, $operator = null, $value = null)
     * @method PersonalAccessToken|null find($key, $default = null)
     * @method PersonalAccessToken[] all()
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null|_IH_PersonalAccessToken_C|PersonalAccessToken[] find($id, array $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrFail($id, array $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrNew($id, array $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
    
    /**
     * @method Photo|null getOrPut($key, $value)
     * @method Photo|$this shift(int $count = 1)
     * @method Photo|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Photo|$this pop(int $count = 1)
     * @method Photo|null pull($key, $default = null)
     * @method Photo|null last(callable $callback = null, $default = null)
     * @method Photo|$this random(int|null $number = null)
     * @method Photo|null sole($key = null, $operator = null, $value = null)
     * @method Photo|null get($key, $default = null)
     * @method Photo|null first(callable $callback = null, $default = null)
     * @method Photo|null firstWhere(string $key, $operator = null, $value = null)
     * @method Photo|null find($key, $default = null)
     * @method Photo[] all()
     */
    class _IH_Photo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Photo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Photo_QB whereId($value)
     * @method _IH_Photo_QB wherePhotoableId($value)
     * @method _IH_Photo_QB wherePhotoableType($value)
     * @method _IH_Photo_QB wherePath($value)
     * @method Photo baseSole(array|string $columns = ['*'])
     * @method Photo create(array $attributes = [])
     * @method _IH_Photo_C|Photo[] cursor()
     * @method Photo|null|_IH_Photo_C|Photo[] find($id, array $columns = ['*'])
     * @method _IH_Photo_C|Photo[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Photo|_IH_Photo_C|Photo[] findOrFail($id, array $columns = ['*'])
     * @method Photo|_IH_Photo_C|Photo[] findOrNew($id, array $columns = ['*'])
     * @method Photo first(array|string $columns = ['*'])
     * @method Photo firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Photo firstOrCreate(array $attributes = [], array $values = [])
     * @method Photo firstOrFail(array $columns = ['*'])
     * @method Photo firstOrNew(array $attributes = [], array $values = [])
     * @method Photo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Photo forceCreate(array $attributes)
     * @method _IH_Photo_C|Photo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Photo_C|Photo[] get(array|string $columns = ['*'])
     * @method Photo getModel()
     * @method Photo[] getModels(array|string $columns = ['*'])
     * @method _IH_Photo_C|Photo[] hydrate(array $items)
     * @method Photo make(array $attributes = [])
     * @method Photo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Photo[]|_IH_Photo_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Photo[]|_IH_Photo_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Photo sole(array|string $columns = ['*'])
     * @method Photo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Photo_QB extends _BaseBuilder {}
    
    /**
     * @method Planet|null getOrPut($key, $value)
     * @method Planet|$this shift(int $count = 1)
     * @method Planet|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Planet|$this pop(int $count = 1)
     * @method Planet|null pull($key, $default = null)
     * @method Planet|null last(callable $callback = null, $default = null)
     * @method Planet|$this random(int|null $number = null)
     * @method Planet|null sole($key = null, $operator = null, $value = null)
     * @method Planet|null get($key, $default = null)
     * @method Planet|null first(callable $callback = null, $default = null)
     * @method Planet|null firstWhere(string $key, $operator = null, $value = null)
     * @method Planet|null find($key, $default = null)
     * @method Planet[] all()
     */
    class _IH_Planet_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Planet[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Planet_QB whereId($value)
     * @method _IH_Planet_QB whereName($value)
     * @method _IH_Planet_QB whereRotationPeriod($value)
     * @method _IH_Planet_QB whereOrbitalPeriod($value)
     * @method _IH_Planet_QB whereDiameter($value)
     * @method _IH_Planet_QB whereClimate($value)
     * @method _IH_Planet_QB whereGravity($value)
     * @method _IH_Planet_QB whereTerrain($value)
     * @method _IH_Planet_QB whereSurfaceWater($value)
     * @method _IH_Planet_QB wherePopulation($value)
     * @method _IH_Planet_QB whereUrl($value)
     * @method Planet baseSole(array|string $columns = ['*'])
     * @method Planet create(array $attributes = [])
     * @method _IH_Planet_C|Planet[] cursor()
     * @method Planet|null|_IH_Planet_C|Planet[] find($id, array $columns = ['*'])
     * @method _IH_Planet_C|Planet[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Planet|_IH_Planet_C|Planet[] findOrFail($id, array $columns = ['*'])
     * @method Planet|_IH_Planet_C|Planet[] findOrNew($id, array $columns = ['*'])
     * @method Planet first(array|string $columns = ['*'])
     * @method Planet firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Planet firstOrCreate(array $attributes = [], array $values = [])
     * @method Planet firstOrFail(array $columns = ['*'])
     * @method Planet firstOrNew(array $attributes = [], array $values = [])
     * @method Planet firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Planet forceCreate(array $attributes)
     * @method _IH_Planet_C|Planet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Planet_C|Planet[] get(array|string $columns = ['*'])
     * @method Planet getModel()
     * @method Planet[] getModels(array|string $columns = ['*'])
     * @method _IH_Planet_C|Planet[] hydrate(array $items)
     * @method Planet make(array $attributes = [])
     * @method Planet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Planet[]|_IH_Planet_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Planet[]|_IH_Planet_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Planet sole(array|string $columns = ['*'])
     * @method Planet updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Planet_QB extends _BaseBuilder {}
    
    /**
     * @method Resident|null getOrPut($key, $value)
     * @method Resident|$this shift(int $count = 1)
     * @method Resident|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Resident|$this pop(int $count = 1)
     * @method Resident|null pull($key, $default = null)
     * @method Resident|null last(callable $callback = null, $default = null)
     * @method Resident|$this random(int|null $number = null)
     * @method Resident|null sole($key = null, $operator = null, $value = null)
     * @method Resident|null get($key, $default = null)
     * @method Resident|null first(callable $callback = null, $default = null)
     * @method Resident|null firstWhere(string $key, $operator = null, $value = null)
     * @method Resident|null find($key, $default = null)
     * @method Resident[] all()
     */
    class _IH_Resident_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Resident[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method Resident baseSole(array|string $columns = ['*'])
     * @method Resident create(array $attributes = [])
     * @method _IH_Resident_C|Resident[] cursor()
     * @method Resident|null|_IH_Resident_C|Resident[] find($id, array $columns = ['*'])
     * @method _IH_Resident_C|Resident[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Resident|_IH_Resident_C|Resident[] findOrFail($id, array $columns = ['*'])
     * @method Resident|_IH_Resident_C|Resident[] findOrNew($id, array $columns = ['*'])
     * @method Resident first(array|string $columns = ['*'])
     * @method Resident firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Resident firstOrCreate(array $attributes = [], array $values = [])
     * @method Resident firstOrFail(array $columns = ['*'])
     * @method Resident firstOrNew(array $attributes = [], array $values = [])
     * @method Resident firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Resident forceCreate(array $attributes)
     * @method _IH_Resident_C|Resident[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Resident_C|Resident[] get(array|string $columns = ['*'])
     * @method Resident getModel()
     * @method Resident[] getModels(array|string $columns = ['*'])
     * @method _IH_Resident_C|Resident[] hydrate(array $items)
     * @method Resident make(array $attributes = [])
     * @method Resident newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Resident[]|_IH_Resident_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Resident[]|_IH_Resident_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Resident sole(array|string $columns = ['*'])
     * @method Resident updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Resident_QB extends _BaseBuilder {}
    
    /**
     * @method RoleHasPermission|null getOrPut($key, $value)
     * @method RoleHasPermission|$this shift(int $count = 1)
     * @method RoleHasPermission|null firstOrFail($key = null, $operator = null, $value = null)
     * @method RoleHasPermission|$this pop(int $count = 1)
     * @method RoleHasPermission|null pull($key, $default = null)
     * @method RoleHasPermission|null last(callable $callback = null, $default = null)
     * @method RoleHasPermission|$this random(int|null $number = null)
     * @method RoleHasPermission|null sole($key = null, $operator = null, $value = null)
     * @method RoleHasPermission|null get($key, $default = null)
     * @method RoleHasPermission|null first(callable $callback = null, $default = null)
     * @method RoleHasPermission|null firstWhere(string $key, $operator = null, $value = null)
     * @method RoleHasPermission|null find($key, $default = null)
     * @method RoleHasPermission[] all()
     */
    class _IH_RoleHasPermission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RoleHasPermission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method RoleHasPermission baseSole(array|string $columns = ['*'])
     * @method RoleHasPermission create(array $attributes = [])
     * @method _IH_RoleHasPermission_C|RoleHasPermission[] cursor()
     * @method RoleHasPermission|null|_IH_RoleHasPermission_C|RoleHasPermission[] find($id, array $columns = ['*'])
     * @method _IH_RoleHasPermission_C|RoleHasPermission[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method RoleHasPermission|_IH_RoleHasPermission_C|RoleHasPermission[] findOrFail($id, array $columns = ['*'])
     * @method RoleHasPermission|_IH_RoleHasPermission_C|RoleHasPermission[] findOrNew($id, array $columns = ['*'])
     * @method RoleHasPermission first(array|string $columns = ['*'])
     * @method RoleHasPermission firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method RoleHasPermission firstOrCreate(array $attributes = [], array $values = [])
     * @method RoleHasPermission firstOrFail(array $columns = ['*'])
     * @method RoleHasPermission firstOrNew(array $attributes = [], array $values = [])
     * @method RoleHasPermission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RoleHasPermission forceCreate(array $attributes)
     * @method _IH_RoleHasPermission_C|RoleHasPermission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RoleHasPermission_C|RoleHasPermission[] get(array|string $columns = ['*'])
     * @method RoleHasPermission getModel()
     * @method RoleHasPermission[] getModels(array|string $columns = ['*'])
     * @method _IH_RoleHasPermission_C|RoleHasPermission[] hydrate(array $items)
     * @method RoleHasPermission make(array $attributes = [])
     * @method RoleHasPermission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RoleHasPermission[]|_IH_RoleHasPermission_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RoleHasPermission[]|_IH_RoleHasPermission_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RoleHasPermission sole(array|string $columns = ['*'])
     * @method RoleHasPermission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RoleHasPermission_QB extends _BaseBuilder {}
    
    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, $default = null)
     * @method Role|null last(callable $callback = null, $default = null)
     * @method Role|$this random(int|null $number = null)
     * @method Role|null sole($key = null, $operator = null, $value = null)
     * @method Role|null get($key, $default = null)
     * @method Role|null first(callable $callback = null, $default = null)
     * @method Role|null firstWhere(string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereTeamId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereGuardName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}
    
    /**
     * @method Starship|null getOrPut($key, $value)
     * @method Starship|$this shift(int $count = 1)
     * @method Starship|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Starship|$this pop(int $count = 1)
     * @method Starship|null pull($key, $default = null)
     * @method Starship|null last(callable $callback = null, $default = null)
     * @method Starship|$this random(int|null $number = null)
     * @method Starship|null sole($key = null, $operator = null, $value = null)
     * @method Starship|null get($key, $default = null)
     * @method Starship|null first(callable $callback = null, $default = null)
     * @method Starship|null firstWhere(string $key, $operator = null, $value = null)
     * @method Starship|null find($key, $default = null)
     * @method Starship[] all()
     */
    class _IH_Starship_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Starship[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Starship_QB whereId($value)
     * @method _IH_Starship_QB whereMglt($value)
     * @method _IH_Starship_QB whereCargoCapacity($value)
     * @method _IH_Starship_QB whereConsumables($value)
     * @method _IH_Starship_QB whereCostInCredits($value)
     * @method _IH_Starship_QB whereCrew($value)
     * @method _IH_Starship_QB whereHyperdriveRating($value)
     * @method _IH_Starship_QB whereLength($value)
     * @method _IH_Starship_QB whereManufacturer($value)
     * @method _IH_Starship_QB whereMaxAtmospheringSpeed($value)
     * @method _IH_Starship_QB whereModel($value)
     * @method _IH_Starship_QB whereName($value)
     * @method _IH_Starship_QB whereStarshipClass($value)
     * @method _IH_Starship_QB whereUrl($value)
     * @method _IH_Starship_QB wherePassengers($value)
     * @method Starship baseSole(array|string $columns = ['*'])
     * @method Starship create(array $attributes = [])
     * @method _IH_Starship_C|Starship[] cursor()
     * @method Starship|null|_IH_Starship_C|Starship[] find($id, array $columns = ['*'])
     * @method _IH_Starship_C|Starship[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Starship|_IH_Starship_C|Starship[] findOrFail($id, array $columns = ['*'])
     * @method Starship|_IH_Starship_C|Starship[] findOrNew($id, array $columns = ['*'])
     * @method Starship first(array|string $columns = ['*'])
     * @method Starship firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Starship firstOrCreate(array $attributes = [], array $values = [])
     * @method Starship firstOrFail(array $columns = ['*'])
     * @method Starship firstOrNew(array $attributes = [], array $values = [])
     * @method Starship firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Starship forceCreate(array $attributes)
     * @method _IH_Starship_C|Starship[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Starship_C|Starship[] get(array|string $columns = ['*'])
     * @method Starship getModel()
     * @method Starship[] getModels(array|string $columns = ['*'])
     * @method _IH_Starship_C|Starship[] hydrate(array $items)
     * @method Starship make(array $attributes = [])
     * @method Starship newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Starship[]|_IH_Starship_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Starship[]|_IH_Starship_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Starship sole(array|string $columns = ['*'])
     * @method Starship updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Starship_QB extends _BaseBuilder {}
    
    /**
     * @method TrailerFilm|null getOrPut($key, $value)
     * @method TrailerFilm|$this shift(int $count = 1)
     * @method TrailerFilm|null firstOrFail($key = null, $operator = null, $value = null)
     * @method TrailerFilm|$this pop(int $count = 1)
     * @method TrailerFilm|null pull($key, $default = null)
     * @method TrailerFilm|null last(callable $callback = null, $default = null)
     * @method TrailerFilm|$this random(int|null $number = null)
     * @method TrailerFilm|null sole($key = null, $operator = null, $value = null)
     * @method TrailerFilm|null get($key, $default = null)
     * @method TrailerFilm|null first(callable $callback = null, $default = null)
     * @method TrailerFilm|null firstWhere(string $key, $operator = null, $value = null)
     * @method TrailerFilm|null find($key, $default = null)
     * @method TrailerFilm[] all()
     */
    class _IH_TrailerFilm_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TrailerFilm[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TrailerFilm_QB whereId($value)
     * @method _IH_TrailerFilm_QB whereFilmId($value)
     * @method _IH_TrailerFilm_QB wherePath($value)
     * @method TrailerFilm baseSole(array|string $columns = ['*'])
     * @method TrailerFilm create(array $attributes = [])
     * @method _IH_TrailerFilm_C|TrailerFilm[] cursor()
     * @method TrailerFilm|null|_IH_TrailerFilm_C|TrailerFilm[] find($id, array $columns = ['*'])
     * @method _IH_TrailerFilm_C|TrailerFilm[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TrailerFilm|_IH_TrailerFilm_C|TrailerFilm[] findOrFail($id, array $columns = ['*'])
     * @method TrailerFilm|_IH_TrailerFilm_C|TrailerFilm[] findOrNew($id, array $columns = ['*'])
     * @method TrailerFilm first(array|string $columns = ['*'])
     * @method TrailerFilm firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TrailerFilm firstOrCreate(array $attributes = [], array $values = [])
     * @method TrailerFilm firstOrFail(array $columns = ['*'])
     * @method TrailerFilm firstOrNew(array $attributes = [], array $values = [])
     * @method TrailerFilm firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TrailerFilm forceCreate(array $attributes)
     * @method _IH_TrailerFilm_C|TrailerFilm[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TrailerFilm_C|TrailerFilm[] get(array|string $columns = ['*'])
     * @method TrailerFilm getModel()
     * @method TrailerFilm[] getModels(array|string $columns = ['*'])
     * @method _IH_TrailerFilm_C|TrailerFilm[] hydrate(array $items)
     * @method TrailerFilm make(array $attributes = [])
     * @method TrailerFilm newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TrailerFilm[]|_IH_TrailerFilm_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TrailerFilm[]|_IH_TrailerFilm_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TrailerFilm sole(array|string $columns = ['*'])
     * @method TrailerFilm updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TrailerFilm_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
    
    /**
     * @method Vehicle|null getOrPut($key, $value)
     * @method Vehicle|$this shift(int $count = 1)
     * @method Vehicle|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Vehicle|$this pop(int $count = 1)
     * @method Vehicle|null pull($key, $default = null)
     * @method Vehicle|null last(callable $callback = null, $default = null)
     * @method Vehicle|$this random(int|null $number = null)
     * @method Vehicle|null sole($key = null, $operator = null, $value = null)
     * @method Vehicle|null get($key, $default = null)
     * @method Vehicle|null first(callable $callback = null, $default = null)
     * @method Vehicle|null firstWhere(string $key, $operator = null, $value = null)
     * @method Vehicle|null find($key, $default = null)
     * @method Vehicle[] all()
     */
    class _IH_Vehicle_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Vehicle[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Vehicle_QB whereId($value)
     * @method _IH_Vehicle_QB whereName($value)
     * @method _IH_Vehicle_QB whereModel($value)
     * @method _IH_Vehicle_QB whereVehicleClass($value)
     * @method _IH_Vehicle_QB whereManufacturer($value)
     * @method _IH_Vehicle_QB whereLength($value)
     * @method _IH_Vehicle_QB whereCostInCredits($value)
     * @method _IH_Vehicle_QB whereCrew($value)
     * @method _IH_Vehicle_QB wherePassengers($value)
     * @method _IH_Vehicle_QB whereMaxAtmospheringSpeed($value)
     * @method _IH_Vehicle_QB whereCargoCapacity($value)
     * @method _IH_Vehicle_QB whereConsumables($value)
     * @method _IH_Vehicle_QB whereUrl($value)
     * @method Vehicle baseSole(array|string $columns = ['*'])
     * @method Vehicle create(array $attributes = [])
     * @method _IH_Vehicle_C|Vehicle[] cursor()
     * @method Vehicle|null|_IH_Vehicle_C|Vehicle[] find($id, array $columns = ['*'])
     * @method _IH_Vehicle_C|Vehicle[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Vehicle|_IH_Vehicle_C|Vehicle[] findOrFail($id, array $columns = ['*'])
     * @method Vehicle|_IH_Vehicle_C|Vehicle[] findOrNew($id, array $columns = ['*'])
     * @method Vehicle first(array|string $columns = ['*'])
     * @method Vehicle firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Vehicle firstOrCreate(array $attributes = [], array $values = [])
     * @method Vehicle firstOrFail(array $columns = ['*'])
     * @method Vehicle firstOrNew(array $attributes = [], array $values = [])
     * @method Vehicle firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Vehicle forceCreate(array $attributes)
     * @method _IH_Vehicle_C|Vehicle[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Vehicle_C|Vehicle[] get(array|string $columns = ['*'])
     * @method Vehicle getModel()
     * @method Vehicle[] getModels(array|string $columns = ['*'])
     * @method _IH_Vehicle_C|Vehicle[] hydrate(array $items)
     * @method Vehicle make(array $attributes = [])
     * @method Vehicle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Vehicle[]|_IH_Vehicle_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Vehicle[]|_IH_Vehicle_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Vehicle sole(array|string $columns = ['*'])
     * @method Vehicle updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Vehicle_QB extends _BaseBuilder {}
}