<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\TranslationApi;

class Translation extends Model
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    /**
     * {@inheritdoc}
     */
    public function googleTranslateApi($text)
    {
        $translate =  new TranslationApi();
        $result = $translate->translateWord($text);

        return $result;
    }
}
