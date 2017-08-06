@component('mail::message')
    # Hello {{$user->name}}

    Thank you for creating your account. Please take a minute to verify it by using the button provided:

    @component('mail::button', ['url' => route('verify', $user->verification_token)])
        Verify Account
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent