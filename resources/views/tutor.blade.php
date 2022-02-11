

<x-app-layout>


    @forelse ($tutors as $user)
<div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
    <div class="flex justify-center md:justify-end -mt-16">
        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
    </div>
    <div>
        <h2 class="text-gray-800 text-3xl font-semibold">{{ $user->name }}</h2>
        <p class="mt-2 text-gray-600">{{ $user->email }}</p>
        <p class="mt-2 text-gray-600">Joined on {{ $user->created_at }}</p>
        <p class="mt-2 text-gray-600">Tutor #registration no. {{ $user->id }}</p>
    </div>
    <div class="flex justify-end mt-4">
        <a href="/book/{{$user->id}}" class="text-xl font-medium text-indigo-500">Book Appointment</a>
    </div>
</div>
    @empty
        <p>No users</p>
    @endforelse
</x-app-layout>
