<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Post;

/**
 * PostSearch represents the model behind the search form about `common\Models\Post`.
 */
class PostSearch extends Post
{
    public $category_name;
    public $username;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'post_meta_id', 'post_user_id', 'post_view_count', 'post_reply_count', 'post_favorite_count', 'post_like_count', 'post_thanks_count', 'post_hate_count', 'post_status', 'post_order', 'post_create', 'post_update'], 'integer'],
            [['post_type', 'post_title', 'post_author', 'excerpt', 'image', 'post_content', 'post_tags', 'category_name', 'username'], 'safe'],//safe表示安全字段,不想被验证
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
        $query = Post::find()->joinWith(['category', 'user']);

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

        $dataProvider->sort->attributes['category_name'] = [
            'asc' => ['name' => SORT_ASC],
            'desc' => ['name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['username'] = [
            'asc' => ['username' => SORT_ASC],
            'desc' => ['username' => SORT_DESC],
        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'post_id' => $this->id,
            'post_meta_id' => $this->post_meta_id,
            'post_user_id' => $this->user_id,
            'post_view_count' => $this->view_count,
            'post_reply_count' => $this->comment_count,
            'post_favorite_count' => $this->favorite_count,
            'post_like_count' => $this->like_count,
            'post_thanks_count' => $this->thanks_count,
            'post_hate_count' => $this->hate_count,
            Post::tableName() . '.post_status' => $this->status,
            'post_order' => $this->order,
            'post_create' => $this->created_at,
            'post_update' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', Post::tableName() . '.post_type', $this->type])
            ->andFilterWhere(['like', 'post_title', $this->title])
            ->andFilterWhere(['like', 'post_author', $this->author])
            ->andFilterWhere(['like', 'post_excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'post_image', $this->image])
            ->andFilterWhere(['like', 'post_content', $this->content])
            ->andFilterWhere(['like', 'post_tags', $this->tags])
            ->andFilterWhere(['like', 'post_name', $this->category_name])
            ->andFilterWhere(['like', 'post_user_name', $this->username]);

        return $dataProvider;
    }
}
