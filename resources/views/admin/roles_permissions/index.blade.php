@extends('layouts.admin')

@section('title')
    {{__('admin.roles_permissions')}}
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">{{__('admin.roles_permissions')}}</h1>
        <p class="mb-3">{{__('admin.roles_permissions_description')}}</p>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">

                <div class="mr-auto">
                    <a href="{{ route('admin.roles_permissions.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">{{__('admin.add_role_permissions')}}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
            @include('admin.roles_permissions.filters.filter')
            <div class="table-responsive mt-3">
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th>{{__('admin.name')}}</th>
                        <th>{{__('admin.description')}}</th>
                        <th>{{__('admin.created_at')}}</th>
                        <th  style="width: 30px;">{{__('admin.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Customer</td>
                        <td>Title</td>
                        <td>Shipping Info</td>
                        <td>Location</td>
                    </tr>
{{--                    @forelse($customer_addresses as $address)--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('admin.customers.show', $address->user_id) }}">{{ $address->user->full_name }}</a>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('admin.customer_addresses.show', $address->id) }}">{{ $address->address_title }}</a>--}}
{{--                                <p class="text-gray-400"><b>{{ $address->defaultAddress() }}</b></p>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $address->first_name . ' ' . $address->last_name }}--}}
{{--                                <p class="text-gray-400">{{ $address->email }}<br/>{{ $address->mobile }}</p>--}}
{{--                            </td>--}}
{{--                            <td>{{ $address->country->name . ' - ' . $address->state->name .' - ' . $address->city->name }}</td>--}}
{{--                            <td>{{ $address->address }}</td>--}}
{{--                            <td>{{ $address->zip_code }}</td>--}}
{{--                            <td>{{ $address->po_box }}</td>--}}
{{--                            <td>--}}
{{--                                <div class="btn-group">--}}
{{--                                    <a href="{{ route('admin.customer_addresses.edit', $address->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>--}}
{{--                                    <a href="javascript:void(0)" onclick="if (confirm('Are you sure to delete this record?') ) { document.getElementById('delete-address-{{ $address->id }}').submit(); } else { return false; }" class="btn btn-danger"><i class="fa fa-trash"></i></a>--}}
{{--                                    <form action="{{ route('admin.customer_addresses.destroy', $address->id) }}" method="post" id="delete-address-{{ $address->id }}" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @empty--}}
{{--                        <tr>--}}
{{--                            <td colspan="4" class="text-center">No addresses found</td>--}}
{{--                        </tr>--}}
{{--                    @endforelse--}}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="8">
                            <div class="float-right">
                                {!! $roles->appends(request()->all())->links() !!}
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection
