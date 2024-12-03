<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "setob".
 *
 * @property int $id
 * @property string $название
 * @property string $IP_адрес
 * @property string $MAC_адрес
 * @property string $местоположение
 * @property string $дата_установки
 */
class Setob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setob';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'IP_адрес', 'MAC_адрес', 'местоположение', 'дата_установки'], 'required'],
            [['дата_установки'], 'safe'],
            [['название', 'IP_адрес'], 'string', 'max' => 50],
            [['MAC_адрес'], 'string', 'max' => 255],
            [['местоположение'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'название' => 'Название',
            'IP_адрес' => 'Ip Адрес',
            'MAC_адрес' => 'Mac Адрес',
            'местоположение' => 'Местоположение',
            'дата_установки' => 'Дата Установки',
        ];
    }
}
