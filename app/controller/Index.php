<?php

namespace app\controller;

use app\service\Mailer;
use support\Request;

class Index
{
    /**
     * @var Mailer
     */
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * response() отобразит responseView() в браузере или responseJson() при запросе
     */
    public function index(Request $request)
    {
        return response('hello FrameX');
    }

    /**
     * responseJson() отобразит JSON
     */
    public function json(Request $request)
    {
        return responseJson('ok');
    }

    /**
     * view() отобразит шаблон
     */
    public function view(Request $request)
    {
        return view('index/view', ['name' => 'FrameX']);
    }

    /**
     * Отправит email
     */
    public function mail(Request $request)
    {
        $this->mailer->mail('hello@rootx.ru', 'Привет, это пример!');
        return response('ok');
    }
}
