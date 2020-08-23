<?php


namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Utils\Context;

/**
 * @AutoController()
 * @property int id;
 */
class CoController
{


    public function get($request)
    {
        return $this->id;
    }

    public function update(RequestInterface $request)
    {
        $this->id = $request->input('id');
        return $this->id;
    }

    public function __get($name)
    {
        return Context::get($name);
    }

    public function __set($name, $value)
    {
        Context::set($name, $value);
        return Context::get($name);
    }
}