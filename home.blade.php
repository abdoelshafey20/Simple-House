@extends('layouts.app')

@section('content')
    @include('temp.navbar')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.CATEGORIES') }}
                        <a href={{ route('categories.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW CATEGORY') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_cate'))
                            <h4 class="alert alert-success text-center">{{ session('message_cate') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.IMAGE') }}</th>
                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.TITLE') }}</th>
                                    <th>{{ __('language.DESCRIPTION') }}</th>
                                    <th>{{ __('language.PARENT_ID') }}</th>
                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('img/categories/' . $item->cate_image) }}"
                                                style="height:70px;width:70px ">
                                        </td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->parent_id }}</td>
                                        <td>
                                            <a href="{{ route('categories.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('categories.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.PRODUCT') }}

                        <a href={{ route('products.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW PRODUCT') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_pro'))
                            <h4 class="alert alert-success text-center">{{ session('message_pro') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.TITLE') }}</th>
                                    <th>{{ __('language.DESCRIPTION') }}</th>
                                    <th>{{ __('language.PRICE') }}</th>
                                    <th>{{ __('language.QUANTITY') }}</th>
                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('products.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.POST') }}

                        <a href={{ route('posts.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW POST') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_post'))
                            <h4 class="alert alert-success text-center">{{ session('message_post') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.TITLE') }}</th>
                                    <th>{{ __('language.DESCRIPTION') }}</th>

                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="{{ route('posts.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('posts.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('posts.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.COMMENTS') }}
                        <a href={{ route('comments.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW COMMENT') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_com'))
                            <h4 class="alert alert-success text-center">{{ session('message_com') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>

                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.TITLE') }}</th>
                                    <th>{{ __('language.DESCRIPTION') }}</th>

                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comment as $item)
                                    <tr>

                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="{{ route('comments.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('comments.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('comments.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.USERS') }}
                        <a href={{ route('users.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW USER') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_user'))
                            <h4 class="alert alert-success text-center">{{ session('message_user') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>

                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.NAME') }}</th>
                                    <th>{{ __('language.EMAIL') }}</th>
                                    <th>{{ __('language.ROLE') }}</th>

                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>

                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>

                                        <td>
                                            <a href="{{ route('users.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('users.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        {{ __('language.BOOK') }}

                        <a href={{ route('books.create') }}
                            class="btn btn-success">{{ __('language.`CREATE` NEW BOOK') }}</a>
                    </div>
                    <div class="card-body">
                        @if (session('message_book'))
                            <h4 class="alert alert-success text-center">{{ session('message_book') }}</h4>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.ID') }}</th>
                                    <th>{{ __('language.TITLE') }}</th>
                                    <th>{{ __('language.DESCRIPTION') }}</th>

                                    <th>{{ __('language.OPRATION') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="{{ route('books.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('books.edit', $item->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('books.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
