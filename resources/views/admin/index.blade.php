<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <b>{{ __('All users') }}</b>
        </h2>
        <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new.user') }}">ADD NEW USER</a></div>
    </x-slot>
{{-- {{dd($data)}} --}}
<div class="py-12">
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php ($i = 1)  
                @foreach ($data as $user)
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a class="hollow button warning" href="{{ route('user.details') }}">DETAILS</a>
                    <a class="hollow button warning" href="">DELETE</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>

        
