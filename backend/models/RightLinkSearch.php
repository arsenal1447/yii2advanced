<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RightLink;

/**
 * RightLinkSearch represents the model behind the search form about `common\models\RightLink`.
 */
class RightLinkSearch extends RightLink
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_id', 'link_type', 'link_create', 'link_update'], 'integer'],
            [['link_title', 'link_url', 'link_image', 'link_content', 'link_created_user'], 'safe'],
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
        $query = RightLink::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'link_id' => $this->link_id,
            'link_type' => $this->link_type,
            'link_create' => $this->link_create,
            'link_update' => $this->link_update,
        ]);

        $query->andFilterWhere(['like', 'link_title', $this->link_title])
            ->andFilterWhere(['like', 'link_url', $this->link_url])
            ->andFilterWhere(['like', 'link_image', $this->link_image])
            ->andFilterWhere(['like', 'link_content', $this->link_content])
            ->andFilterWhere(['like', 'link_created_user', $this->link_created_user]);

        return $dataProvider;
    }
}