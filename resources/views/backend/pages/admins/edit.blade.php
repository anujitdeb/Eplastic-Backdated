@section('page-title')
    Edit Admin
@endsection


@extends('backend.layouts.main')

@section('admin-section')
@include('backend.layouts.partials.alerts')
<div class="intro-y box mt-5">
    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
            Edit Admin
        </h2>
    </div>
    <div class="p-5" id="horizontal-form">
        <form action="{{ route('dashboard.admins.update', $admin->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="preview" style="">
                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Admin Name</label>
                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Niamul Hasan" name="name" value=" {{ $admin->name }}">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Email</label>
                    <input type="email" class="input w-full border mt-2 flex-1" name="email" value="{{ $admin->email }}">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Phone</label>
                    <input type="text" class="input w-full border mt-2 flex-1" name="phone" value="{{ $admin->phone }}">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Address</label>
                    <input type="text" class="input w-full border mt-2 flex-1" name="address" value="{{ $admin->address }}">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Password</label>
                    <input type="password" class="input w-full border mt-2 flex-1" placeholder="Enter Password" name="password">
                </div>

                <div class="flex flex-col sm:flex-row items-center">
                    <label class="w-full sm:w-20 sm:text-right sm:mr-5">Confirm Password</label>
                    <input type="password" class="input w-full border mt-2 flex-1" placeholder="Confirm Password" name="password_confirmation">
                </div>

                {{--@foreach ($roles as $role)
                    @if ($role->guard_name == 'admin')
                        <div class="flex items-center text-gray-700 mt-5 sm:ml-20 sm:pl-5">
                            <input type="checkbox" class="input border mr-2" value="{{ $role->name }}" name="roles[]" id="permission-{{ $loop->index }}" {{ $admin->hasRole($role) ? 'checked' : ''}}>
                            <label class="cursor-pointer select-none" for="permission-{{ $loop->index }}">{{ $role->name }}</label>
                        </div>
                    @endif
                @endforeach--}}
                <div class="sm:ml-20 sm:pl-5 mt-5">
                    <input type="submit" class="button bg-theme-1 text-white" value="Update" />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
