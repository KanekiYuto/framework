<?php

namespace Handyfit\Framework\Foundation\Hook;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Handyfit\Framework\Support\Timestamp;
use Handyfit\Framework\Trace\EloquentTrace;
use Handyfit\Framework\Hook\Eloquent as Hook;

/**
 * 基础的模型 - Hook
 *
 * @author KanekiYuto
 */
class Eloquent extends Hook
{

    /**
     * 模型插入前的操作
     *
     * @param  Model          $model
     * @param  Builder        $query
     * @param  EloquentTrace  $eloquentTrace
     *
     * @return bool
     */
    public function performInsert(Model $model, Builder $query, EloquentTrace $eloquentTrace): bool
    {
        if (empty($model->getAttribute($model->getKeyName()))) {
            $model->setAttribute($model->getKeyName(), Timestamp::millisecond());
        }

        $model->setAttribute($model::CREATED_AT, Timestamp::second());
        $model->setAttribute($model::UPDATED_AT, Timestamp::second());

        return true;
    }

    /**
     * 模型更新前的操作
     *
     * @param  Model          $model
     * @param  Builder        $query
     * @param  EloquentTrace  $eloquentTrace
     *
     * @return bool
     */
    public function performUpdate(Model $model, Builder $query, EloquentTrace $eloquentTrace): bool
    {
        $model->setAttribute($model::UPDATED_AT, Timestamp::second());

        return true;
    }

}