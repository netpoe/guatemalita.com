<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MailchimpSubscriptionRequest;

class MailchimpController extends Controller
{
    public function subscribe(MailchimpSubscriptionRequest $request)
    {
        $email = $request->email;

        session('email', $email);

        return redirect()->route('front.mailchimp.confirmation');
    }

    public function confirmation()
    {
        $listId = config('mailchimp.guatemalitaListId');

        $result = $mc->get("lists/{$listId}/members", []);

        print_r($result); exit;

        return view('front.mailchimp.confirmation');
    }
}
