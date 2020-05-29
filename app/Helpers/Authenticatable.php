<?php

/**
 * Get user has sign-in
 *
 * @return App\Models\User|\Illuminate\Contracts\Auth\Authenticatable|null
 */
function user()
{
    return auth()->user();
}