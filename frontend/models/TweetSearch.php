<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdPost;

/**
 * PostSearch represents the model behind the search form about `common\Models\Post`.
 */
class TweetSearch extends Tweet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'post_meta_id', 'post_user_id', 'post_view_count', 'post_reply_count', 'post_favorite_count', 'post_like_count', 'post_thanks_count', 'post_hate_count', 'post_status', 'post_order', 'post_create', 'post_update'], 'integer'],
            [['post_type', 'post_title', 'post_author', 'post_excerpt', 'post_image', 'post_content', 'post_tags'], 'safe'],
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
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tweet::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => ['defaultOrder' => [
                'post_order' => SORT_ASC,
                'post_update' => SORT_DESC,
            ]]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'post_id' => $this->post_id,
            'post_meta_id' => $this->post_meta_id,
            'post_user_id' => $this->post_user_id,
            'post_view_count' => $this->post_view_count,
            'post_reply_count' => $this->post_reply_count,
            'post_favorite_count' => $this->post_favorite_count,
            'post_like_count' => $this->post_like_count,
            'post_thanks_count' => $this->post_thanks_count,
            'post_hate_count' => $this->post_hate_count,
            'post_status' => $this->post_status,
            'post_order' => $this->post_order,
            'post_create' => $this->post_create,
            'post_update' => $this->post_update,
        ]);

        $query->andFilterWhere(['like', 'post_type', $this->post_type])
            ->andFilterWhere(['like', 'post_title', $this->post_title])
            ->andFilterWhere(['like', 'post_author', $this->post_author])
            ->andFilterWhere(['like', 'post_excerpt', $this->post_excerpt])
            ->andFilterWhere(['like', 'post_image', $this->post_image])
            ->andFilterWhere(['like', 'post_content', $this->post_content])
            ->andFilterWhere(['like', 'post_tags', $this->post_tags]);

        return $dataProvider;
    }
}
