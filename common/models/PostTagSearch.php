<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * PostTagSearch represents the model behind the search form about `common\models\PostTag`.
 */
class PostTagSearch extends PostTag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'tag_count', 'tag_create', 'tag_update'], 'integer'],
            [['tag_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PostTag::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tag_id' => $this->tag_id,
            'tag_count' => $this->tag_count,
            'tag_create' => $this->tag_create,
            'tag_update' => $this->tag_update,
        ]);

        $query->andFilterWhere(['like', 'tag_name', $this->tag_name]);

        return $dataProvider;
    }
}
