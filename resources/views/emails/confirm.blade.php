@component('mail::message')
    # Hello {{$user->name}}

    You changed your email. Please take a minute to verify it by using the button provided:

    @component('mail::button', ['url' => route('verify', $user->verification_token)])
        Verify Account
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
