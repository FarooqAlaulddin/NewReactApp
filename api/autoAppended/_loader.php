<?php

foreach (glob('autoAppended/*.php') as $filename)
{
    include_once $filename;
}
