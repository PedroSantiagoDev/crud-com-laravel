@extends("master")

@section("content")
    <h2>Users</h2>

    @if (session()->has("message"))
        {{ session()->get("message") }}
    @endif

    <ul>
        @foreach ($users as $user)
            <li class="ml-3">
                {{ $user->name }} |
                <a href="{{ route("users.edit", $user) }}" class="uppercase text-blue-400">Edit</a>
                |
                <a href="{{ route("users.show", $user) }}" class="uppercase text-stone-400">Show</a>
            </li>
        @endforeach

        {{ $users->links() }}
    </ul>
@endsection
