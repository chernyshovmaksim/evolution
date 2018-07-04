<?php namespace EvolutionCMS\Models;

use Illuminate\Database\Eloquent;
use EvolutionCMS\Traits;

/**
 * @property int $id
 * @property int $internalKey
 * @property string $fullname
 * @property int $role
 * @property string $email
 * @property string $phone
 * @property string $mobilephone
 * @property int $blocked
 * @property int $blockeduntil
 * @property int $blockedafter
 * @property int $logincount
 * @property int $lastlogin
 * @property int $thislogin
 * @property int $failedlogincount
 * @property string $sessionid
 * @property int $dob
 * @property int $gender
 * @property string $country
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $fax
 * @property string $photo
 * @property string $comment
 * @property int $createdon
 * @property int $editedon
 *
 * Virtual
 * @property-read \Carbon\Carbon $created_at
 * @property-read \Carbon\Carbon $updated_at
 * @TODO: @property-read \Carbon\Carbon blockeduntil
 * @TODO: @property-read \Carbon\Carbon blockedafter
 */
class UserAttribute extends Eloquent\Model
{
    use Traits\Models\TimeMutator;

	const CREATED_AT = 'createdon';
	const UPDATED_AT = 'editedon';
    protected $dateFormat = 'U';

	protected $casts = [
		'internalKey' => 'int',
		'role' => 'int',
		'blocked' => 'int',
		'blockeduntil' => 'int',
		'blockedafter' => 'int',
		'logincount' => 'int',
		'lastlogin' => 'int',
		'thislogin' => 'int',
		'failedlogincount' => 'int',
		'dob' => 'int',
		'gender' => 'int',
		'createdon' => 'int',
		'editedon' => 'int'
	];

	protected $fillable = [
		'internalKey',
		'fullname',
		'role',
		'email',
		'phone',
		'mobilephone',
		'blocked',
		'blockeduntil',
		'blockedafter',
		'logincount',
		'lastlogin',
		'thislogin',
		'failedlogincount',
		'sessionid',
		'dob',
		'gender',
		'country',
		'street',
		'city',
		'state',
		'zip',
		'fax',
		'photo',
		'comment'
	];

    public function getCreatedAtAttribute()
    {
        return $this->convertTimestamp($this->createdon);
    }

    public function getUpdatedAtAttribute()
    {
        return $this->convertTimestamp($this->editedon);
    }
}
