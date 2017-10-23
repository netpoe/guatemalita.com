<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\MailchimpSubscriptionRequest;
use Mailchimp\Mailchimp;

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
        return view('front.mailchimp.confirmation');
    }

    public function sendEventsNewsletter(Mailchimp $mc)
    {
        try {
            $today = date('Y-m-d');
            $mailchimpListId = env('MAILCHIMP_LIST_ID');
            $mailchimpTemplateId = (int) env('MAILCHIMP_EVENTS_TEMPLATE_ID');

            $result = $mc->post('campaigns', [
                'type' => 'regular',
                'recipients' => [
                    'list_id' => $mailchimpListId,
                ],
                'settings' => [
                    'subject_line' => 'Calendario Guatemalita',
                    'title' => "Guatemalita $today",
                    'from_name' => 'Guatemalita.com',
                    'reply_to' => 'hola@guatemalita.com',
                    'template_id' => $mailchimpTemplateId,
                ],
            ]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            print_r($e->getMessage()); exit;
            // TODO send me an email if there's an error
        }

        try {
            $campaignId = $result['id'];

            $result = $mc->post("/campaigns/{$campaignId}/actions/send");
        } catch (\Exception $e) {
            error_log($e->getMessage());
            print_r($e->getMessage()); exit;
            // TODO send me an email if there's an error
        }

        print_r($result); exit;
    }
}












