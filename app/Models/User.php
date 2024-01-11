<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Nette\Utils\Random;

/**
 * @property int $id
 * @property string $firstname
 * @property string $middlename
 * @property string $surname
 * @property string $email
 * @property string $password
 * @property Carbon $date_of_birth
 * @property string $profile_picture_url
 * @property string $sex
 * @property boolean $account_verified
 * @property string $account_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'surname',
        'email',
        'password',
        'date_of_birth',
        'profile_picture_url',
        'sex',
        'account_verified',
        'account_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
        'date_of_birth' => 'date',
        'account_verified' => 'boolean'
    ];

    public function generateTokenString(): string
    {
        $account_token = Random::generate(32);
        $this->update([
            'account_token' => $account_token
        ]);
        return $account_token;
    }

}
