<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_role', 'user_status', 'user_create', ], 'integer'],
            [['user_name', 'user_avatar', 'user_authkey', 'user_passhash', 'user_password_reset_token', 'user_email', 'user_tagline'], 'safe'],
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
        $query = User::find();

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
            'user_id' => $this->user_id,
            'user_role' => $this->user_role,
            'user_status' => $this->user_status,
            'user_create' => $this->user_create,
//             'user_update' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_avatar', $this->user_avatar])
            ->andFilterWhere(['like', 'user_authkey', $this->user_authkey])
            ->andFilterWhere(['like', 'user_passhash', $this->user_passhash])
            ->andFilterWhere(['like', 'user_password_reset_token', $this->user_password_reset_token])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'user_tagline', $this->user_tagline]);

        return $dataProvider;
    }
}
