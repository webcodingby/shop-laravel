<?php //8a0cdc090c53a9500748345be916b200
/** @noinspection all */

namespace Laravel\Telescope\Storage {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Telescope\Storage\_IH_EntryModel_C;
    use LaravelIdea\Helper\Laravel\Telescope\Storage\_IH_EntryModel_QB;
    
    /**
     * @property int $sequence
     * @property string $uuid
     * @property string $batch_id
     * @property string|null $family_hash
     * @property bool $should_display_on_index
     * @property string $type
     * @property array $content
     * @property Carbon|null $created_at
     * @method static _IH_EntryModel_QB onWriteConnection()
     * @method _IH_EntryModel_QB newQuery()
     * @method static _IH_EntryModel_QB on(null|string $connection = null)
     * @method static _IH_EntryModel_QB query()
     * @method static _IH_EntryModel_QB with(array|string $relations)
     * @method _IH_EntryModel_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_EntryModel_C|EntryModel[] all()
     * @foreignLinks 
     * @mixin _IH_EntryModel_QB
     */
    class EntryModel extends Model {}
}