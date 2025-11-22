<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UnreadNotificationRequest;
use App\Models\User;

class NotificationController extends Controller
{
    public function index(UnreadNotificationRequest $request)
    {
        return User::find($request->user_id)->unreadNotifications;
    }
}
