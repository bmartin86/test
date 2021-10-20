 {{-- {{dd($user)}} --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <b>Hello {{ $user->username }}</b>
        </h2>
    </x-slot>
<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->username }} info</div>
                    <div class="card-body">
                    <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">User id</th>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a class="hollow button warning" href="">EDIT</a>
                  </tr>
                </tbody>
            </table>
            </div>

                </div>
            </div> 
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">CV</div>  
                    <div class="card-body">{{ $user->cv }}</div> 
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">ToDo List</div>
            <div class="card-body"></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">New ToDo</div>  
            <div class="card-body"></div> 
          </div>
        </div>
      </div>    
    </div>
    
</div>
</x-app-layout>

        
