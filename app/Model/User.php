<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class User extends Model implements IdentityInterface
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'login',
        'password',
        'photo'
    ];

    protected static function booted()
    {
        static::created(function ($user) {
            $user->password = md5($user->password);
            $user->save();
        });
    }

    //Выборка пользователя по первичному ключу
    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }

    //Возврат первичного ключа
    public function getId(): int
    {
        return $this->id;
    }

    //Возврат аутентифицированного пользователя
    public function attemptIdentity(array $credentials)
    {
        return self::where(['login' => $credentials['login'],
            'password' => md5($credentials['password'])])->first();
    }

//    public function photo($img)
//    {
//        $photo = User . phptime() . $img['name'];
//        $this->photo = $photo;
//        move_uploaded_file($img['tmp_name'], __DIR__ . '/../../public/assets/img/' . $photo);
//    }

    public function photo($img)
    {
        $photo = time().$img['name'] ;
        $this->photo = $photo;
        //var_dump($_SERVER['DOCUMENT_ROOT']. '/pop-it-mvc/public/img/' . $photo); die();
        move_uploaded_file($img['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/pnss/public/assets/img/' . $photo);
    }
}
