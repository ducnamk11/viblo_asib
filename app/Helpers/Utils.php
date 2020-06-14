<?php

function getIpClient()
{
    return request()->headers->get('X-Forwarded-For', request()->ip());
}