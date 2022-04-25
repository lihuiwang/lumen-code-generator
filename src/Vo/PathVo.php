<?php
/**
 * 路径常量
 * Create on 2022/4/24
 * Create by jiyongwang
 */

namespace jiyongwang\LumenCodeGenerator\Vo;


use Illuminate\Support\Facades\App;

class PathVo
{
    const MAKE_SERVICE = 'Service';
    const MAKE_REQUEST_BO_ADD = 'AddRequestBo';
    const MAKE_REQUEST_BO_GET = 'GetRequestBo';
    const MAKE_REQUEST_BO_GET_PAGE_LIST = 'GetPageListRequestBo';
    const MAKE_REQUEST_BO_DEL = 'DelRequestBo';
    const MAKE_CONTROLLER = 'Controller';
    const MAKE_REPOSITORY = 'Repository';
    const MAKE_MODEL = 'Model';
    const MAKE_TRANSFORM_GET = 'GetTransform';
    const MAKE_TRANSFORM_GET_PAGE_LIST = 'GetPageListTransform';

    /**
     * 根目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function BasePath()
    {
        return App::basePath();
    }

    /**
     * App目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function AppPath()
    {
        return self::basePath() . DIRECTORY_SEPARATOR . 'app';
    }

    /**
     * 服务层目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function ServicesPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Services';
    }

    /**
     * 数据访问层目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function RepositoriesPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Repositories';
    }

    /**
     * 表模型目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function ModelsPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Models';
    }

    /**
     * 控制器目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function ControllersPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Controllers';
    }

    /**
     * 表单验证目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function RequestBoPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'RequestBo';
    }

    /**
     * 数据传输层目录
     * Create on 2022/4/24
     * Create by wlh
     * @return string
     */
    public static function TransformPath()
    {
        return self::appPath() . DIRECTORY_SEPARATOR . 'Transform';
    }
}
