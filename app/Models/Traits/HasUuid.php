<?php
namespace App\Models\Traits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
/**
 * Trait para salvar o campo uuid automaticamente no model
 *
 * @property-read string $uuid
 *
 * @package CastlightApi\Models\Traits
 */
trait HasUuid
{
    protected static function bootHasUuid(): void
    {
        static::creating(static function ($model): void {
            if (!$model->uuid) {
                $model->forceFill(['uuid' => (string) Str::uuid()]);
            }
        });
    }
    public static function uuidToId(?string $uuid): ?int
    {
        if (!$uuid) {
            return null;
        }
        return static::query()->where('uuid', $uuid)->value('id');
    }
    /**
     * Execute the query by UUID and get the first result or throw an exception.
     *
     * @param  string  $uuid
     * @param  string  $column
     * @return Model|static
     */
    public static function firstOrFailUuid(string $uuid, string $column = 'uuid'): Model
    {
        return static::query()->where($column, $uuid)->firstOrFail();
    }
    /**
     * Execute the query by UUID and get the first result or throw an exception.
     *
     * @param  string|null  $uuid
     * @param  string  $column
     * @return Model|static
     */
    public static function firstUuid(?string $uuid, string $column = 'uuid'): ?Model
    {
        return static::query()->where($column, $uuid)->first();
    }
}
