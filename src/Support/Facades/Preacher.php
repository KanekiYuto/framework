<?php

namespace Handyfit\Framework\Support\Facades;

use Closure;
use Handyfit\Framework\Preacher\PreacherResponse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

/**
 * Preacher Facade
 *
 * @method static void             useMsgHook(Closure $closure)
 * @method static PreacherResponse base()
 * @method static PreacherResponse msg(string $msg)
 * @method static PreacherResponse code(int $code)
 * @method static PreacherResponse msgCode(int $code, string $msg)
 * @method static PreacherResponse paging(int $page, int $prePage, int $total, array $data)
 * @method static PreacherResponse receipt(object $data)
 * @method static PreacherResponse rows(array $data)
 * @method static PreacherResponse allow(bool $allow, mixed $pass, mixed $noPass, callable $handle = null)
 * @method static PreacherResponse model(Model $model)
 *
 * @author KanekiTuto
 *
 * @see    \Handyfit\Framework\Preacher\Builder
 */
class Preacher extends Facade
{

    /**
     * Facade accessor
     *
     * @var string
     */
    public const FACADE_ACCESSOR = 'handyfit.preacher';

    /**
     * Indicates whether the parsed Facade should be cached
     *
     * @var bool
     */
    protected static $cached = false;

    /**
     * Gets the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }

}
