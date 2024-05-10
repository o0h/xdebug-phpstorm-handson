<?php

function deepHoge()
{
    echo 'deep, and..' . PHP_EOL;
    echo 'deepHoge' . PHP_EOL;
}
function fuga()
{
    echo 'fuga' . PHP_EOL;;
}
function hogeFuga()
{
    deepHoge();
    fuga();
}
function main()
{
    echo 'hoge' . PHP_EOL;
    fuga();
    hogeFuga();
}

main();
