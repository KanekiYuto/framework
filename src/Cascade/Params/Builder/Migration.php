<?php

namespace Handyfit\Framework\Cascade\Params\Builder;

/**
 * Migration builder params
 *
 * @author KanekiYuto
 */
class Migration
{

    /**
     * 文件名
     *
     * @var string
     */
    private string $filename;

    /**
     * 文件注释
     *
     * @var string
     */
    private string $comment;

    /**
     * Hook 类
     *
     * @var string
     */
    private string $hook;

    /**
     * 构建一个 Migration Builder 参数实例
     *
     * @param string $filename
     * @param string $comment
     * @param string $hook
     *
     * @return void
     */
    public function __construct(string $filename, string $comment, string $hook)
    {
        $this->filename = $filename;
        $this->comment = $comment;
        $this->hook = $hook;
    }

    /**
     * 获取文件名称
     *
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * 获取文件注释
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * 获取 Hook 类
     *
     * @return string
     */
    public function getHook(): string
    {
        return $this->hook;
    }

}
