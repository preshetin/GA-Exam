
Email, First Name <br />

@foreach($users as $user)
    @if($user->email)
        {{ $user->email }}, {{ $user->anyName() }} <br />
    @endif
@endforeach