<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Mailchimp\Mailchimp;

class MailchimpSubscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if ($this->subscriptionFails()) {
                $validator->errors()->add('email', 'Este correo ya existe o es inválido.');
            }
        });
    }

    public function subscriptionFails()
    {
        $mcApiKey = config('mailchimp.apikey');

        $mc = new Mailchimp($mcApiKey);

        $listId = config('mailchimp.guatemalitaListId');

        try {
            $result = $mc->post("lists/{$listId}/members", [
                'email_address' => $this->email,
                'status' => 'pending',
            ]);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email'
        ];
    }
}
