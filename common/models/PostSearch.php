<?php

namespace common\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdPost;

/**
 * PostSearch represents the model behind the search form about `common\Models\AdPost`.
 */
class PostSearch extends AdPost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'post_cate_id', 'post_user_id', 'post_view_count', 'post_reply_count', 'post_favorite_count', 'post_like_count', 'post_thanks_count', 'post_hate_count', 'post_status', 'post_order', 'post_create', 'post_update'], 'integer'],
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
        $query = AdPost::find();

        // 如果有无人区节点 帖子列表过滤无人区节点的帖子
        if (PostMeta::noManLandId() && (empty($params['PostSearch']['post_cate_id']) || $params['PostSearch']['post_cate_id'] != PostMeta::noManLandId())) {
            $query->andWhere(['!=', 'post_cate_id', PostMeta::noManLandId()]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => ['defaultOrder' => [
                'post_order' => SORT_ASC,
                'post_last_comment_time' => SORT_DESC,
                'post_create' => SORT_DESC,
            ]]
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'post_meta_id' => $this->post_meta_id,
            'post_user_id' => $this->post_user_id,
            'post_view_count' => $this->view_count,
            'post_reply_count' => $this->comment_count,
            'post_favorite_count' => $this->favorite_count,
            'post_like_count' => $this->like_count,
            'post_thanks_count' => $this->thanks_count,
            'post_hate_count' => $this->hate_count,
            'post_status' => $this->status,
            'post_order' => $this->order,
            'post_create' => $this->created_at,
            'post_update' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'post_type', $this->type])
            ->andFilterWhere(['like', 'post_title', $this->title])
            ->andFilterWhere(['like', 'post_author', $this->author])
            ->andFilterWhere(['like', 'post_excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'post_image', $this->image])
            ->andFilterWhere(['like', 'post_content', $this->content])
            ->andFilterWhere(['like', 'post_tags', $this->tags]);

        return $dataProvider;
    }
}
