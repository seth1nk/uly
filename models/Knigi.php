<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knigi".
 *
 * @property int $код_книги
 * @property string $название
 * @property string $автор
 * @property string $год_выпуска
 * @property string $город_издания
 * @property string $колво_страниц
 * @property string $рейтинг
 */
class Knigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'knigi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'автор', 'год_выпуска', 'город_издания', 'колво_страниц', 'рейтинг'], 'required'],
            [['название', 'автор', 'год_выпуска', 'город_издания', 'колво_страниц', 'рейтинг'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'код_книги' => 'Код Книги',
            'название' => 'Название',
            'автор' => 'Автор',
            'год_выпуска' => 'Год Выпуска',
            'город_издания' => 'Город Издания',
            'колво_страниц' => 'Колво Страниц',
            'рейтинг' => 'Рейтинг',
        ];
    }
}
