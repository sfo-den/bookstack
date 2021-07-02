<?php

namespace BookStack\Auth\Access\Mfa;

use BookStack\Auth\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $method
 * @property string $value
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class MfaValue extends Model
{
    protected static $unguarded = true;

    const METHOD_TOTP = 'totp';
    const METHOD_BACKUP_CODES = 'backup_codes';

    /**
     * Upsert a new MFA value for the given user and method
     * using the provided value.
     */
    public static function upsertWithValue(User $user, string $method, string $value): void
    {
        /** @var MfaValue $mfaVal */
        $mfaVal = static::query()->firstOrNew([
            'user_id' => $user->id,
            'method' => $method
        ]);
        $mfaVal->setValue($value);
        $mfaVal->save();
    }

    /**
     * Decrypt the value attribute upon access.
     */
    public function getValue(): string
    {
        return decrypt($this->value);
    }

    /**
     * Encrypt the value attribute upon access.
     */
    public function setValue($value): void
    {
        $this->value = encrypt($value);
    }
}
