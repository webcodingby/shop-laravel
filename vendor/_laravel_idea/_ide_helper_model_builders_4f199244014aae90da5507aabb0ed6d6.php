<?php //b0f95560dd77309dd9f506988265b4ea
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Telescope\Storage {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Telescope\Storage\EntryModel;
    use Laravel\Telescope\Storage\EntryQueryOptions;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method EntryModel|null getOrPut($key, $value)
     * @method EntryModel|$this shift(int $count = 1)
     * @method EntryModel|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method EntryModel|$this pop(int $count = 1)
     * @method EntryModel|null pull($key, \Closure $default = null)
     * @method EntryModel|null last(callable $callback = null, \Closure $default = null)
     * @method EntryModel|$this random(callable|int|null $number = null)
     * @method EntryModel|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method EntryModel|null get($key, \Closure $default = null)
     * @method EntryModel|null first(callable $callback = null, \Closure $default = null)
     * @method EntryModel|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method EntryModel|null find($key, $default = null)
     * @method EntryModel[] all()
     */
    class _IH_EntryModel_C extends _BaseCollection {
        /**
         * @param int $size
         * @return EntryModel[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_EntryModel_QB whereSequence($value)
     * @method _IH_EntryModel_QB whereUuid($value)
     * @method _IH_EntryModel_QB whereBatchId($value)
     * @method _IH_EntryModel_QB whereFamilyHash($value)
     * @method _IH_EntryModel_QB whereShouldDisplayOnIndex($value)
     * @method _IH_EntryModel_QB whereType($value)
     * @method _IH_EntryModel_QB whereContent($value)
     * @method _IH_EntryModel_QB whereCreatedAt($value)
     * @method EntryModel baseSole(array|string $columns = ['*'])
     * @method EntryModel create(array $attributes = [])
     * @method _IH_EntryModel_C|EntryModel[] cursor()
     * @method EntryModel|null|_IH_EntryModel_C|EntryModel[] find($id, array|string $columns = ['*'])
     * @method _IH_EntryModel_C|EntryModel[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method EntryModel|_IH_EntryModel_C|EntryModel[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method EntryModel|_IH_EntryModel_C|EntryModel[] findOrFail($id, array|string $columns = ['*'])
     * @method EntryModel|_IH_EntryModel_C|EntryModel[] findOrNew($id, array|string $columns = ['*'])
     * @method EntryModel first(array|string $columns = ['*'])
     * @method EntryModel firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method EntryModel firstOrCreate(array $attributes = [], array $values = [])
     * @method EntryModel firstOrFail(array|string $columns = ['*'])
     * @method EntryModel firstOrNew(array $attributes = [], array $values = [])
     * @method EntryModel firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EntryModel forceCreate(array $attributes)
     * @method _IH_EntryModel_C|EntryModel[] fromQuery(string $query, array $bindings = [])
     * @method _IH_EntryModel_C|EntryModel[] get(array|string $columns = ['*'])
     * @method EntryModel getModel()
     * @method EntryModel[] getModels(array|string $columns = ['*'])
     * @method _IH_EntryModel_C|EntryModel[] hydrate(array $items)
     * @method EntryModel make(array $attributes = [])
     * @method EntryModel newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EntryModel[]|_IH_EntryModel_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|EntryModel[]|_IH_EntryModel_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EntryModel sole(array|string $columns = ['*'])
     * @method EntryModel updateOrCreate(array $attributes, array $values = [])
     * @method _IH_EntryModel_QB withTelescopeOptions(string $type, EntryQueryOptions $options)
     */
    class _IH_EntryModel_QB extends _BaseBuilder {}
}