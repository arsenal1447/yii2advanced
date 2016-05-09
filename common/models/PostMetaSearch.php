<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PostMeta;

/**
 * PostMetaSearch represents the model behind the search form about `common\models\PostMeta`.
 */
class PostMetaSearch extends PostMeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'cat_count', 'cat_order', 'cat_create', 'cat_update'], 'integer'],
            [['cat_name', 'cat_alias', 'cat_type', 'cat_desc'], 'safe'],
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
        $query = PostMeta::find();

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
            'cat_id' => $this->cat_id,
            'cat_count' => $this->cat_count,
            'cat_order' => $this->cat_order,
            'cat_create' => $this->cat_create,
            'cat_update' => $this->cat_update,
        ]);

        $query->andFilterWhere(['like', 'cat_name', $this->cat_name])
            ->andFilterWhere(['like', 'cat_alias', $this->cat_alias])
            ->andFilterWhere(['like', 'cat_type', $this->cat_type])
            ->andFilterWhere(['like', 'cat_desc', $this->cat_desc]);

        return $dataProvider;
    }
}
