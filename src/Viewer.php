<?php

namespace Mac\Untitled10;
use Latte;
class Viewer
{
    private array $data =[];

    public function __construct(array $data=[])
    {
        $this->data= [...$data];
    }
    public function render()
    {
        $latte = new Latte\Engine();
        $latte->setTempDirectory(__DIR__.'/../views/cache');
        $params = $this->data;
        $latte->render(__DIR__ . '/../views/index.latte', $params);

    }
}